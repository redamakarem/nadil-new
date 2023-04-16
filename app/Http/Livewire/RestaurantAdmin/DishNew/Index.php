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
        $this->dishes = $restaurant->dishes;
    }
    public function render()
    {
        return view('livewire.restaurant-admin.dish-new.index');
    }
}
