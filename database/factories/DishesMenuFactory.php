<?php

namespace Database\Factories;

use App\Models\DishesMenu;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishesMenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DishesMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'name_ar' => $this->faker->name(),
            'from_date' => $this->faker->date(),
            'to_date' => $this->faker->dateTimeBetween('+1 week', '+1 year')->format('Y-m-d'),
            'from_time' => $this->faker->randomElement(['8:00:00','9:00:00','10:00:00']),
            'to_time' => $this->faker->randomElement(['20:00:00','21:00:00','22:00:00']),
            'is_active' => true
        ];
    }

    
}
