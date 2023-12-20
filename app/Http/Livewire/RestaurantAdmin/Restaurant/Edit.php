<?php

namespace App\Http\Livewire\RestaurantAdmin\Restaurant;

use Carbon\Carbon;
use App\Models\Cuisine;
use Livewire\Component;
use App\Models\MealType;
use App\Models\Restaurant;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class Edit extends Component
{
    use WithMedia;
    public Restaurant $restaurant;
    public $mediaComponentNames = ['restaurant_image', 'restaurant_bg'];
    public $form_data = [];
    public $restaurant_image;
    public $restaurant_bg;
    public $users;
    public $cuisines;
    public $meal_types;
    public $coordinates = '';
    public $is_active = false;
    public $selected_cuisines;
    public $selected_meal_types;



    protected $listeners = ['restaurantEdited' => 'goToRestaurants'];
    protected $rules = [
        'restaurant.name_en' => 'required',
        'restaurant.name_ar' => 'required',
        'restaurant.email' => 'required|email|unique:restaurants,email,',
        'restaurant.cuisines' => 'required',
        'restaurant.meal_types' => 'required',
        'restaurant.address' => 'required',
        'restaurant.phone' => 'required',
        'restaurant.user_id' => 'required',
        'restaurant.max_party_size' => 'required|numeric',
        'restaurant.estimated_dining_time' => 'required|numeric',
        'restaurant_image' => 'required',
        'coordinates' => 'required',
        'restaurant.accessible' => 'sometimes',
        'restaurant.private_rooms' => 'sometimes',
        'restaurant.opening_hours_en' => 'sometimes',
        'restaurant.opening_hours_ar' => 'sometimes',
        'restaurant.weekend_opening_hours_en' => 'sometimes',
        'restaurant.weekend_opening_hours_en' => 'sometimes',
        'restaurant.facebook' => 'sometimes',
        'restaurant.instagram' => 'sometimes',
        'restaurant.is_active' => 'sometimes',

    ];


    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
        $this->cuisines = Cuisine::all();
        $this->meal_types = MealType::all();
        $this->selected_cuisines = $this->restaurant->cuisines->pluck('id');
        $this->selected_meal_types = $this->restaurant->meal_types->pluck('id');
    }

    public function goToRestaurants()
    {
        $this->redirect(route('restaurant-admin.restaurants.index'));
    }

    public function submit()
    {
        $this->validate();
        if ($this->activable()) {
            $this->restaurant->is_active = true;

            $this->restaurant->save();
            $this->restaurant->cuisines()->sync($this->selected_cuisines);
            $this->restaurant->meal_types()->sync($this->selected_meal_types);
            $this->restaurant->addFromMediaLibraryRequest($this->restaurant_image)
                ->toMediaCollection('restaurant_images');
            $this->restaurant->addFromMediaLibraryRequest($this->restaurant_bg)
                ->toMediaCollection('restaurant_bgs');
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Restaurant edited Successfully!!"
            ]);
        }
    }

    private function activable()
    {
        $has_tables = false;
        $has_menu = false;
        $has_dishes = false;
        $has_schedule = false;
        if ($this->restaurant->diningTables->where('is_active', true)->count() > 0) {
            $has_tables = true;
        } else {
            $this->addError('no_tables', 'Restaurant has no tables');
        }
        if ($this->restaurant->menus->where('is_active', true)->count() > 0) {
            $has_menu = true;
        } else {
            $this->addError('no_menu', 'Restaurant has no active menu');
        }
        if ($this->restaurant->dishes->count() > 0) {
            $has_dishes = true;
        } else {
            $this->addError('no_dishes', 'Restaurant has no dishes');
        }
        if (
            $this->restaurant->schedules
            ->where('from_date', '<', Carbon::now())
            ->where('to_date', '>', Carbon::now())->count() > 0
        ) {
            $has_schedule = true;
        } else {
            $this->addError('no_schedules', 'Restaurant has no active schedule');
        }
        if ($has_dishes && $has_menu && $has_tables && $has_schedule) {
            return true;
        } else {
            return false;
        }
    }

    public function render()
    {
        return view('livewire.restaurant-admin.restaurant.edit');
    }
}
