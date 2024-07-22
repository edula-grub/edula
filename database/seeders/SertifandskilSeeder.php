<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Sertifandskil;
use Illuminate\Database\Seeder;

class SertifandskilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guru = Guru::all();
        for($i = 1 ; $i <= 10 ; $i++){
            Sertifandskil::create([
                'guru_id' => $guru->random()->id,
                'nama' => fake()->name(),
                'distributor' => fake()->sentence(2),
                'skill' => fake()->sentence(1),
                'level' => fake()->sentence(1),
                'status' => fake()->randomElement([0, 1]),
                'image' => fake()->imageUrl(),
            ]);
        }
    }
}
