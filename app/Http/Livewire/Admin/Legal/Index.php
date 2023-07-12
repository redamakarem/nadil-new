<?php

namespace App\Http\Livewire\Admin\Legal;

use Livewire\Component;

class Index extends Component
{
    public $legals;
    public function mount()
    {
        $this->legals = \App\Models\Legal::all();
    }
    public function render()
    {
        return view('livewire.admin.legal.index');
    }
}
