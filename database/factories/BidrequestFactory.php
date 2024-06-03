<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bidrequest>
 */
class BidrequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'siswa_id' => fake()->randomNumber(),
            'guru_id' => fake()->randomNumber(),
            'nama_mapel' => fake()->text(500),
            'komen_siswa_ke_guru' => fake()->randomNumber(),
            'rating_siswa_ke_guru' => fake()->randomNumber(),

        ];
    }
}
