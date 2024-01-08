<?php

namespace App\Http\Livewire\Admin\Logs;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class View extends Component
{
    public Activity $activity;

    public function mount(Activity $activity)
    {
        $this->activity = $activity;
        // dd($this->activity->changes['old']);
    }
    public function render()
    {
        return view('livewire.admin.logs.view');
    }
}
