<?php

namespace App\Http\Livewire\Site\Mobile\User;

use App\Models\Governate;
use Livewire\Component;

class ProfileEdit extends Component
{
    public $profile;
    public $area;
    public $governates;

    public function mount()
    {
        $this->profile = auth()->user()->profile;
        $this->governates = Governate::all();
    }
    protected $rules = [
        'profile.name' => 'required',
        'profile.email' => 'required|email',
        'profile.phone' => 'required|numeric',
        'area' => 'required'
        
    ];
    public function submit()
    {
        
    }

    public function render()
    {
        return view('livewire.site.mobile.user.profile-edit');
    }
}
