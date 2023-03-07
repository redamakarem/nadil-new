<?php

namespace App\Http\Livewire\RestaurantAdmin\Schedule;

use App\Models\Restaurant;
use App\Models\Schedule;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $start_date;
    public $end_date;
    public $start_time;
    public $end_time;
    public $slot_length;
    public $slot_capacity;
    public  $route;
    public Restaurant $restaurant;

    protected $listeners = ['ScheduleAdded' => 'goSchedules'];

    protected $rules = [
        'name' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'slot_length' => 'required',
    ];

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
        $this->route = url()->previous();
    }

    public function goSchedules()
    {
        $this->redirect($this->route);
    }




    public function submit()
    {
        $this->validate();
//        dd($this->restaurant->id);

        Schedule::create([
            'name' => $this->name,
            'restaurant_id' => $this->restaurant->id,
            'from_date' => $this->start_date,
            'to_date' => $this->end_date,
            'from_time' => $this->start_time,
            'to_time' => $this->end_time,
            'slot_length' => $this->slot_length,
            'slot_capacity' => 0,
        ]);
        $this->reset_form();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Schedule created Successfully!!"
        ]);
    }

    public function reset_form()
    {
        $this->name = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->start_time = '';
        $this->end_time = '';
    }
    public function render()
    {
        return view('livewire.restaurant-admin.schedule.create');
    }
}
