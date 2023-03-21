<?php

namespace App\Http\Livewire\RestaurantAdmin\Users;

use Livewire\Component;

class ByRole extends Component
{
    public $users;
    
    public function mount($users)
    {
        $this->users = $users;
    }
    public function render()
    {
        return view('livewire.restaurant-admin.users.by-role');
    }
}
