<?php

namespace App\Http\Livewire\Site\User\Profile;

use App\Models\Governate;
use App\Models\Profile;
use Auth;
use Livewire\Component;

class Edit extends Component
{
    public Profile $profile;
    public $selected_date;
    public $governates;
    public $area;

    protected $rules =[
        'profile.name' => ['required'],
        'profile.dob' => ['required','date'],
        'profile.phone' => ['numeric'],
        'profile.email' => ['email'],
        'profile.gender' => ['sometimes'],
        'profile.address' => ['required'],
    ];

    public function mount()
    {
        $this->profile = Auth::user()->profile?? new Profile();
        $this->profile->user_id = Auth::user()->id;
        $this->governates = Governate::all();
    }

    public function submit()
    {
        $this->validate();
        $this->profile->dob = $this->selected_date;
        $this->profile->user->area_id = $this->area;
        $this->profile->user->save();
        $this->profile->save();
        
    }

    public function render()
    {
        return view('livewire.site.user.profile.edit');
    }
}
