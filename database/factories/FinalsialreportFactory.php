<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Finalsialreport>
 */
class FinalsialreportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task1' => fake()->text(50),
            'task5' => fake()->text(50),
            'task6' => fake()->text(50),
            'task2' => fake()->text(50),
            'task3' => fake()->text(50),
            'task4' => fake()->text(50),
            'task7' => fake()->text(50),

        ];
    }
}
