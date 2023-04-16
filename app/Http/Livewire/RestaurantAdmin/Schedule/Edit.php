<?php

namespace App\Http\Livewire\RestaurantAdmin\Schedule;

use Livewire\Component;
use App\Models\Schedule;

class Edit extends Component
{
    public Schedule $schedule;
    public $name;
    public $start_date;
    public $end_date;
    public $start_time;
    public $end_time;
    public  $slot_length;

    protected $rules = [
        'name' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'slot_length' => 'required',
    ];


    public function mount($schedule)
    {
        $this->schedule = $schedule;
        $this->name = $schedule->name;
        $this->start_date = $schedule->from_date;
        $this->end_date = $schedule->to_date;
        $this->start_time = $schedule->from_time;
        $this->end_time = $schedule->to_time;
        $this->slot_length = $schedule->slot_length;

    }

    public function submit()
    {
        $this->validate();
        $this->schedule->from_date = $this->start_date;
        $this->schedule->name = $this->name;
        $this->schedule->to_date = $this->end_date;
        $this->schedule->from_time = $this->start_time;
        $this->schedule->to_time = $this->end_time;
        $this->schedule->slot_length = $this->slot_length;
        $this->schedule->save();
    }

    public function render()
    {
        return view('livewire.restaurant-admin.schedule.edit');
    }
}
