<?php

namespace App\Http\Livewire\RestaurantAdmin\Catalogue;

use App\Models\DishesMenu;
use App\Models\Restaurant;
use Livewire\Component;

class Index extends Component
{
    public  Restaurant $restaurant;
    public $menus = null;
    public function render()
    {
        return view('livewire.restaurant-admin.catalogue.index');
    }

    public function mount()
    {
        if(auth()->user()->hasRole('restaurant-super-admin')){
           $restaurants = auth()->user()->restaurants->pluck('id');
           $this->menus = DishesMenu::whereIn('restaurant_id',$restaurants)->get(); 
        }
        else{
            $this->menus = auth()->user()->workplace->menus;
        }
    }
}
