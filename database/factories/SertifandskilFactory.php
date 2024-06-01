<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sertifandskil>
 */
class SertifandskilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guru_id' => fake()->randomNumber(),
            'level' => fake()->text(50),
            'diterima_oleh_sistem' => fake()->randomNumber(),

        ];
    }
}
