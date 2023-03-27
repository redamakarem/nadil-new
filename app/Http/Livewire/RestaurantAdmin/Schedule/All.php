<?php

namespace App\Http\Livewire\RestaurantAdmin\Schedule;

use Livewire\Component;
use App\Models\Schedule;

class All extends Component
{
    public $schedules = null;
    public function mount()
    {
        $this->get_schedules();
    }

    private function get_schedules()
    {
        $restaurants = auth()->user()->restaurants->pluck('id');
        $this->schedules = Schedule::whereIn('restaurant_id',$restaurants)->get();
    }
    public function render()
    {
        return view('livewire.restaurant-admin.schedule.all');
    }
}
