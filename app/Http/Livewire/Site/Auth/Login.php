<?php

namespace App\Http\Livewire\Site\Auth;

use Livewire\Component;
use App\Providers\RouteServiceProvider;

class Login extends Component
{
    public $email;
    public $password;
    public $showPassword =false;
    protected function rules()
    {
        return [
            'email' => ['required','email'],
            'password' =>['required']
        ];
    }

    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }
    public function render()
    {
        return view('livewire.site.auth.login');
    }

    public function login()
    {
        $this->validate();
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            session()->flash('message', "You have been successfully login.");
            if(auth()->user()->hasRole('super-admin')){
                return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
            }
            if(auth()->user()->hasRole('restaurant-admin')){
                return redirect()->intended(RouteServiceProvider::RESTAURANT_HOME);
            }
            return redirect()->intended(RouteServiceProvider::HOME);
    }else{
        $this->addError('bad_credentials', 'Wrong username or password');
    }
    }
}
