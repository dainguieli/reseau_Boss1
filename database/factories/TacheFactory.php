<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tache>
 */
class TacheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(random_int(1, 3), true),
            'colour' => fake()->colorName,
            'starts_at' => now(),
               'description' =>fake()->text(),
             'statut' =>fake()->words(random_int(1, 3), true),
            'ends_at' => now()->addHour(),
        ];
    }
}
