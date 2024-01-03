<?php

namespace App\Http\Livewire\Admin\DishesNew;

use App\Models\Dish;
use Livewire\Component;

class Index extends Component
{
    public $dishes;
    public $idToRemove;
    protected $listeners = ['deleteConfirmed' => 'deleteDish'];

    public function mount()
    {
        $this->dishes = Dish::all();
        // dd($this->dishes);
    }
    public function render()
    {
        return view('livewire.admin.dishes-new.index');
    }

    public function confirmDishDeletion($id)
    {
        $this->idToRemove = $id;
        $this->dispatchBrowserEvent('show-swal-delete');
    }

     public function deleteDish()
    {
        $restaurant = Dish::findOrFail($this->idToRemove);
        $restaurant->delete();
    }
}
