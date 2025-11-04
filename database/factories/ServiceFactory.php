<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title' =>fake()->title(),
            'description' =>fake()->paragraph(),
            'duration' =>fake()->time(),
            'price'=>fake()->randomFloat(2, 50, 500),
            'image'=>fake()->image()
            
        ];
    }
}
