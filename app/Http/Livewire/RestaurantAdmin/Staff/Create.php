<?php

namespace App\Http\Livewire\RestaurantAdmin\Staff;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    public $restaurant;
    public $user;
    public $roles;
    public $selected_role;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'user.name' => ['required'],
        'user.email' => ['required','unique:users,email'],
        'password' => ['required','min:5','confirmed'],
        'selected_role' => ['required']
    ];

    public function mount($restaurant)
    {
        $this->restaurant = $restaurant;
        $this->user = new User();
        $this->roles = Role::whereIn('id',[5,6,7])->get();
    }
    public function submit()
    {
        $this->validate();
        $this->user->password = Hash::make($this->password);
        $this->user->restaurant_id = $this->restaurant->id;
        $this->user->save();
        $this->user->syncRoles([$this->selected_role]);
    }
    public function render()
    {
        return view('livewire.restaurant-admin.staff.create');
    }
}
