<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'scu' => $this->faker->randomNumber(5),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'title' => $this->faker->productName,
            'description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat(2, 10, 9000),
            'quantity' => $this->faker->numberBetween(1, 100)
        ];
    }
}
