<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;



class Roles extends Component
{
    public $users;
    public $role_id;

    public $idToRemove;

    public $filters = [
        'name' => '',
        'email' => ''
        // Add more filters as needed
    ];
    
    

    protected $listeners = ['deleteConfirmed' => 'deleteUser'];

    public function mount($users, $role_id)
    {
        $this->users = $users;
        $this->role_id = $role_id;
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

    public function updatingFilters()
    {
        $this->query();
    }

    public function query()
{
    $this->users = User::role($this->role_id);

    $this->users = $this->users->when(!empty($this->filters['name']), function ($query) {
        return $query->where('name', 'like', '%' . $this->filters['name'] . '%');
    });

    $this->users = $this->users->when(!empty($this->filters['email']), function ($query) {
        return $query->where('email', 'like', '%' . $this->filters['email'] . '%');
    });

    $this->users = $this->users->get();
}

    public function render()
    {
        $users = $this->users;
        return view('livewire.admin.users.roles', compact('users'));
    }
}
