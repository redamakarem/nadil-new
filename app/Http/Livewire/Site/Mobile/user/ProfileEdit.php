<?php

namespace App\Http\Livewire\Site\Mobile\User;

use App\Models\Governate;
use Livewire\Component;

class ProfileEdit extends Component
{
    public $user;
    public $profile;
    public $area;
    public $gender;
    public $governates;


    public function mount()
    {
        $this->user = auth()->user();
        $this->profile = auth()->user()->profile;
        $this->governates = Governate::all();
        $this->area = $this->user->area_id;
        $this->gender = $this->profile->gender;
    }
    protected $rules = [
        'profile.name' => 'required',
        'profile.email' => 'required|email',
        'profile.phone' => 'required|numeric',
        'area' => 'required',
        'gender' => 'required'
        
    ];
    public function submit()
    {
        $this->validate();
        $this->user->area_id = $this->area;
        $this->profile->gender = $this->gender;
        $this->user->save();
        $this->profile->save();
        
    }

    public function render()
    {
        return view('livewire.site.mobile.user.profile-edit');
    }
}
