<?php

namespace Database\Factories;

use App\Models\Cuisine;
use App\Models\Dish;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Dish::class;
    
    public function definition()
    {
        return [
            'name_en' => $this->faker->name(),
            'name_ar' => $this->faker->name(),
            'description_en' => $this->faker->text(),
            'description_ar' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'prep_time' => $this->faker->randomElement(['5','15']),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Dish $dish) {
            $dish->categories()->create([
                'name_en' => $this->faker->name(),
                'name_ar' => $this->faker->name(),
            ]);
            $dish->cuisine_id = Cuisine::all()->pluck('id')->random();
            $dish->schedules()->create([
                'name' => $this->faker->name(),
                'from_date' => $this->faker->dateTimeBetween('now', '+1 week')->format('Y-m-d'),
                'to_date' => $this->faker->dateTimeBetween('+2 weeks', '+2 months')->format('Y-m-d'),
                'from_time' => $this->faker->randomElement(['08:00:00','09:00:00','10:00:00']),
                'to_time' => $this->faker->randomElement(['20:00:00','21:00:00','22:00:00']),
                'slot_length' => $this->faker->randomElement([10,15,20,30,45,60]),
            ]);
            $dish->save();
            
        });
    }
}
