<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->randomFloat(2, 100, 1000000),
            'description' => fake()->paragraph(),
            'category_id' => Categories::inRandomOrder()->first()->id,
            'branch_id' => Branch::inRandomOrder()->first()->id,
        ];
    }
}
