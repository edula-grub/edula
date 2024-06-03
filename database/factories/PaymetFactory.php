<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paymet>
 */
class PaymetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'total' => fake()->text(50),
            'status' => fake()->text(50),
            'method_id' => fake()->text(50),
            'user_id' => fake()->text(50),

        ];
    }
}
