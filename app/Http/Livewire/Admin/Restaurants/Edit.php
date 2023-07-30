<?php

namespace App\Http\Livewire\Admin\Restaurants;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Cuisine;
use Livewire\Component;
use App\Models\MealType;
use App\Models\Governate;
use App\Models\Restaurant;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class Edit extends Component
{
    use WithMedia;
    public  Restaurant $restaurant;
    public $cuisines;
    public $meal_types;
    public $mediaComponentNames = ['restaurant_image', 'restaurant_bg'];
    public $restaurant_image;
    public $restaurant_bg;
    public $coordinates;
    public $owner;
    public $governates;

    public $area;


    protected $listeners = ['restaurant-updated' => 'goToRestaurants'];

    public function goToRestaurants()
    {
        $this->redirect(route('admin.restaurants.index'));
    }

    public function rules()
    {
        return [
            'restaurant.name_en' => 'required',
            'restaurant.name_ar' => 'required',
            'restaurant.email' => 'required|email',
            'restaurant.coordinates' => 'required',
            'restaurant.block' => 'required|numeric',
            'restaurant.street_en' => 'required',
            'restaurant.street_ar' => 'required',
            'restaurant.building' => 'required|numeric',
            'restaurant.floor' => 'required|numeric',
            'restaurant.phone' => 'required',
            'restaurant.address' => 'required',
            'restaurant.max_party_size' => 'required|numeric',
            'restaurant.accessible' => 'sometimes',
            'restaurant.private_rooms' => 'sometimes',
            'restaurant.opening_hours_en' => 'sometimes',
            'restaurant.opening_hours_ar' => 'sometimes',
            'restaurant.weekend_opening_hours_en' => 'sometimes',
            'restaurant.weekend_opening_hours_ar' => 'sometimes',
            'restaurant.estimated_dining_time' => 'required|numeric',
            'restaurant.is_active' => 'sometimes',
            'restaurant.dress_code' => 'sometimes',
            'cuisines' => 'required',
            'owner' => 'required',
        ];
    }
    public function mount($restaurant, $cuisines)
    {

        $this->restaurant = $restaurant;
        $this->coordinates = $restaurant->coordinates;
        $this->owner = $restaurant->user_id;
        $this->cuisines = $this->restaurant->cuisines->pluck('id')->toArray();
        $this->meal_types = $this->restaurant->meal_types->pluck('id')->toArray();
        $this->area = $this->restaurant->area;
        $this->governates = Governate::all();
    }

    public function render()
    {
        $cuisiness = Cuisine::all();
        $ownerss = User::role('restaurant-super-admin')->get();
        $meal_typess = MealType::all();
        $users = User::role('restaurant-admin')->get();
        return view('livewire.admin.restaurants.edit', compact(['cuisiness', 'users', 'meal_typess', 'ownerss']));
    }


    public function submit()
    {
        $this->validate();
        $this->restaurant->coordinates = $this->coordinates;
        $this->restaurant->user_id = $this->owner;
        $this->restaurant->area = $this->area;
        if ($this->restaurant->is_active) {
            if ($this->activable()) {
                $this->restaurant->is_active = true;
                $edited_restaurant = $this->restaurant->save();
                $this->restaurant->cuisines()->sync($this->cuisines);
                $this->restaurant->meal_types()->sync($this->meal_types);
                if ($this->restaurant_image) {
                    $this->restaurant->syncFromMediaLibraryRequest($this->restaurant_image)->toMediaCollection('restaurant_images');
                }

                if ($this->restaurant_bg) {
                    $this->restaurant->syncFromMediaLibraryRequest($this->restaurant_bg)->toMediaCollection('restaurant_bgs');
                }

                $this->dispatchBrowserEvent('alert', [
                    'type' => 'success',
                    'message' => "Restaurant edited Successfully!!"
                ]);
            } else {
                $this->restaurant->is_active = false;
            }
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
            $this->addError('no_menu', 'Restaurant has no menu');
        }
        if ($this->restaurant->dishes->count() > 0) {
            $has_dishes = true;
        } else {
            $this->addError('no_dishes', 'Restaurant has no dishes');
        }
        if ($this->restaurant->schedules
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
}
