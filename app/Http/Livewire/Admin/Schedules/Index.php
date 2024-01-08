<?php

namespace App\Http\Livewire\Admin\Schedules;

use App\Models\Restaurant;
use App\Models\Schedule;
use Livewire\Component;

class Index extends Component
{

    public $idToRemove;

    protected $listeners = ['deleteConfirmed' => 'deleteSchedule'];

    public Restaurant $restaurant;

    public $schedules;

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
        $this->schedules = $restaurant->schedules;
//        dd($this->menus);
    }

    public function confirmScheduletDeletion($id)
    {
        $this->idToRemove = $id;
        $this->dispatchBrowserEvent('show-swal-delete');
    }

     public function deleteSchedule()
    {
        $restaurant = Schedule::findOrFail($this->idToRemove);
        $restaurant->delete();
    }
    public function render()
    {
        return view('livewire.admin.schedules.index');
    }
}
