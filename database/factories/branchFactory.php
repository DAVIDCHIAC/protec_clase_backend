<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class branchFactory extends Factory
{
    
     protected $model =Branch::class; 
     
     // @return array<string, mixed>
     
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company(),
        ];
    }
}