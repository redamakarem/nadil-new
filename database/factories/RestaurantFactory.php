<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_en' => $this->faker->name(),
            'name_ar' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->address(),
            'coordinates' => strval(rand(0,50)+(mt_rand() / mt_getrandmax())).','.strval(rand(0,50)+(mt_rand() / mt_getrandmax())),
            'phone' => $this->faker->phoneNumber(),
            'user_id' =>  $this->create_restaurant_owner()->id,
            'max_party_size' =>  rand(2,8),
            'max_party_size' =>  rand(2,8),
            'estimated_dining_time' =>  $this->faker->randomElement(['5','15']),
            'area' =>  Area::all()->pluck('id')->random(),
            'facebook' =>  'https://www.facebook.com/'.$this->faker->userName(),
            'instagram' =>  'https://www.instagram.com/'.$this->faker->userName(),
            'block' =>  rand(1,10),
            'street_en' =>  $this->faker->streetName(),
            'street_ar' =>  $this->faker->streetName(),
            'floor' =>  rand(1,10),
            'building' =>  rand(1,200),
            'accessible' =>  $this->faker->boolean(),
            'private_rooms' =>  $this->faker->boolean(),
            'opening_hours_en' =>  $this->faker->randomElement(['8:00 AM - 10:00 PM','8:00 AM - 11:00 PM','8:00 AM - 12:00 AM']),
            'opening_hours_ar' =>  $this->faker->randomElement(['8:00 AM - 10:00 PM','8:00 AM - 11:00 PM','8:00 AM - 12:00 AM']),
            'dress_code' =>  $this->faker->randomElement(['Casual','Formal']),
            'is_active' =>  false,
            'is_featured' =>  false,


        ];
    }

    private function create_restaurant_owner()
    {
        $user = User::factory()->create([
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'password' => bcrypt('password'),
        ]);
        $user->assignRole('restaurant-super-admin');
        return $user;
    }

    private function create_restaurant_admin_staff($restaurant_id)
    {
        $user = User::factory()->create([
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'password' => bcrypt('password'),
            'restaurant_id' => $restaurant_id,
        ]);
        $user->assignRole('restaurant-admin');
        return $user;
    }
    private function create_restaurant_host_staff($restaurant_id)
    {
        $user = User::factory()->create([
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'password' => bcrypt('password'),
            'restaurant_id' => $restaurant_id,
        ]);
        $user->assignRole('restaurant-host');
        return $user;
    }
    private function create_restaurant_manager_staff($restaurant_id)
    {
        $user = User::factory()->create([
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'password' => bcrypt('password'),
            'restaurant_id' => $restaurant_id,
        ]);
        $user->assignRole('restaurant-host');
        return $user;
    }

    public function configure()
    {
        return $this->afterCreating(function (Restaurant $restaurant) {
            $restaurant->cuisines()->attach(rand(1, 4));
            $restaurant->schedules()->create([
                'name' => $this->faker->name(),
                'from_date' => $this->faker->dateTimeBetween('now', '+1 week')->format('Y-m-d'),
                'to_date' => $this->faker->dateTimeBetween('+2 weeks', '+2 months')->format('Y-m-d'),
                'from_time' => $this->faker->randomElement(['08:00:00','09:00:00','10:00:00']),
                'to_time' => $this->faker->randomElement(['20:00:00','21:00:00','22:00:00']),
                'slot_length' => $this->faker->randomElement([10,15,20,30,45,60]),
            ]);
            $restaurant->save();
            $this->create_restaurant_admin_staff($restaurant->id);
            $this->create_restaurant_host_staff($restaurant->id);
            $this->create_restaurant_manager_staff($restaurant->id);
        });
    }
}
