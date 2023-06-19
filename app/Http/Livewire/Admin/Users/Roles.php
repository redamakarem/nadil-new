<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;



class Roles extends Component
{
    public $users;

    public $idToRemove;

    protected $listeners = ['deleteConfirmed' => 'deleteUser'];

    public function mount($users)
    {
        $this->users = $users;
    }

    public function confirmUserDeletion($id)
    {
        $this->idToRemove = $id;
        $this->dispatchBrowserEvent('show-swal-delete');
    }

    public function deleteUser()
    {
        $user = User::findOrFail($this->idToRemove);
        $user->delete();
    }

    public function render()
    {
        $users = $this->users;
        return view('livewire.admin.users.roles', compact('users'));
    }
}
