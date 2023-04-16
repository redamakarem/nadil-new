<?php

namespace App\Http\Livewire\Site\Mobile;

use Livewire\Component;
use App\Models\SiteContact;

class Contact extends Component
{

    public SiteContact $contact;

    protected $rules = [
        'contact.name' => ['required'],
        'contact.email' => ['required','email'],
        'contact.subject' => ['required'],
        'contact.message' => ['required'],
    ];

    public function mount(SiteContact $contact)
    {
        $this->contact = $contact;
    }
    public function render()
    {
        return view('livewire.site.mobile.contact');
    }

    public function submit()
    {
        $this->validate();
        $this->contact->save();
        $this->contact= new SiteContact();
        session()->flash('success','Contact sent successfully');
    }
}
