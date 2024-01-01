<?php

namespace App\Http\Livewire\Admin\Logs;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class Index extends Component
{
    public $logs;
    public function mount()
    {
        $this->logs = Activity::all()->take(100);
        // dd($this->logs);
    }
    public function render()
    {
        return view('livewire.admin.logs.index');
    }
}
