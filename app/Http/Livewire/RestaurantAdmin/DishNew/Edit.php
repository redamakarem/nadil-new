<?php

namespace App\Http\Livewire\RestaurantAdmin\DishNew;

use App\Models\Cuisine;
use App\Models\Dish;
use Livewire\Component;

class Edit extends Component
{
    public $restaurant_list;
    public $menus;
    public $dish;
    public $cuisines;
    public $selected_cuisine;
    public $selected_menu;
    public $selected_restaurant;


    protected $rules = [
        'dish.name_en' =>['required'],
        'dish.name_ar' =>['required'],
        'dish.description_en' =>['required'],
        'dish.description_ar' =>['required'],
        'dish.prep_time' =>['required'],
        'dish.price' =>['required'],
        'selected_cuisine' =>['required'],
        'selected_restaurant' =>['required'],
        'selected_menu' =>['required']
    ];
    public function mount(Dish $dish)
    {
        if (auth()->user()->hasRole('restaurant-super-admin')) {
            $this->restaurant_list = auth()->user()->restaurants;
        }
        else{
            $this->restaurant_list = collect([auth()->user()->workplace]);
        }
        $this->dish = $dish;
        $this->menus = $this->dish->restaurant->menus;
        $this->selected_restaurant = $this->dish->restaurant->id;
        $this->cuisines = Cuisine::all();
        $this->selected_cuisine = $this->dish->cuisine_id;
        $this->selected_menu = $this->dish->menu_id;

    }

    public function submit()
    {
        $this->validate();
        $this->dish->cuisine_id = $this->selected_cuisine;
        $this->dish->menu_id = $this->selected_menu;
        $this->dish->restaurant_id = $this->selected_restaurant;
        $this->dish->save();
    }
    
    public function render()
    {
        return view('livewire.restaurant-admin.dish-new.edit');
    }
}
