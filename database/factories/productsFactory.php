<?php

namespace Database\Factories;

use App\Models\branch;
use App\Models\Categories;
use Database\Seeders\branchseeder;
use Database\Seeders\categoriesseeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
    'name' => fake()->name(),
    'price' => fake()->randomFloat(2, 100, 1000000),
    'description' => fake()->paragraph(),
    'category_id' => categories::inRandomOrder()->first()->id,
    'brand_id' => branch::inRandomOrder()->first()->id,
];
    }
}
