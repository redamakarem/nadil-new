<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Deleted extends Component
{
    public $users;

    public $idToRemove;

    protected $listeners = ['restoreConfirmed' => 'restoreUser'];


    public function mount()
    {
        $this->users = User::onlyTrashed()->get();
    }
    public function render()
    {
        return view('livewire.admin.users.deleted');
    }

    public function confirmUserRestore($id)
    {
        $this->idToRemove = $id;
        $this->dispatchBrowserEvent('show-swal-delete');
    }

     public function restoreUser()
    {
        $user = User::withTrashed()->find($this->idToRemove);
        $user->restore();
    }
}
