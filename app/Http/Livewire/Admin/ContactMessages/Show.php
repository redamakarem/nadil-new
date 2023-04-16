<?php

namespace App\Http\Livewire\Admin\ContactMessages;

use App\Models\SiteContact;
use Livewire\Component;

class Show extends Component
{
    public $contact;

    public function mount(SiteContact $contact)
    {
        $this->contact = $contact;
    }
    
    public function render()
    {
        return view('livewire.admin.contact-messages.show');
    }
}
