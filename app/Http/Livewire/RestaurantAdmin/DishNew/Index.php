<?php

namespace App\Http\Livewire\RestaurantAdmin\DishNew;

use App\Models\Dish;
use Livewire\Component;
use App\Models\Restaurant;

class Index extends Component
{
    public $dishes;

    public function mount(Restaurant $restaurant)
    {
        if(auth()->user()->hasRole('restaurant-super-admin')){
            $this->dishes = Dish::whereIn('restaurant_id',auth()->user()->restaurants->pluck('id'))->get();
        }else{
            $this->dishes = Dish::where('restaurant_id',auth()->user()->workplace->id)->get();
        }
    }
    public function render()
    {
        return view('livewire.restaurant-admin.dish-new.index');
    }
}
