<?php

namespace App\Http\Livewire\RestaurantAdmin\Users;

use App\Models\User;
use Livewire\Component;
use App\Models\Restaurant;
use Spatie\Permission\Models\Role;

class Create extends Component
{

    
    public $form_data =[];
    public $users;
    public $restaurants;
    public $cuisine_options='';
    protected $rules = [
        'form_data.name' => 'required',
        'form_data.email' => 'required|email',
        'form_data.password' => 'required',
        'form_data.restaurant_id' => 'sometimes',
        'form_data.password_confirmation' => 'required|same:form_data.password',


    ];

    public function mount()
    {
        $this->form_data['name'] = '';
        $this->form_data['email'] = '';
        $this->form_data['password'] = '';
        $this->form_data['restaurant_id'] = '';
        $this->form_data['password_confirmation'] = '';
        $this->form_data['roles'] = [];
        $this->form_data['cuisines'] = [];
        $this->restaurants = Restaurant::where('user_id',auth()->user()->id)->get();

    }





    public function submit()
    {

        $this->validate();
        $new_user = User::create([
            'name' => $this->form_data['name'],
            'email' => $this->form_data['email'],
            'restaurant_id' => $this->form_data['restaurant_id'],
            'password' => bcrypt($this->form_data['password']),
        ]);
        $new_user->roles()->attach($this->form_data['roles']);
        $this->reset();
        $this->dispatchBrowserEvent('test');
        return redirect()->route('admin.users.index');
    }
    public function render()
    {
        $roles = Role::wherein('id',[5,6,7])->get();
        $users = User::role('restaurant-admin')->get();


        return view('livewire.restaurant-admin.users.create',compact('roles','users'));
    }


    
}
