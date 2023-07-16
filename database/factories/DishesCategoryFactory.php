<?php

namespace Database\Factories;

use App\Models\Cuisine;
use App\Models\Dish;
use App\Models\DishesCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishesCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DishesCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_en'=>$this->faker->name(),
            'name_ar'=>$this->faker->name(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function(DishesCategory $category){
            $this->create_dishes($category,5);
        });
    }
    private function create_dishes(DishesCategory $category, $count = 5)
    {
        for ($i = 0; $i < $count; $i++) {
            $dish = Dish::create(
                [
                    'name_en' => $this->faker->name(),
                    'name_ar' => $this->faker->name(),
                    'description_en' => $this->faker->text(),
                    'description_ar' => $this->faker->text(),
                    'price' => $this->faker->randomFloat(2, 1, 100),
                    'prep_time' => $this->faker->randomElement(['5','15']),
                    'cuisine_id' => Cuisine::all()->pluck('id')->random(),
                    'restaurant_id' => $category->menu->restaurant->id,
                    'menu_id' => $category->menu->restaurant->menus->pluck('id')->random(),
                    'isActive' => true
                ]
                );
                $dish->categories()->sync($category->id);
        }
        
    }
}
