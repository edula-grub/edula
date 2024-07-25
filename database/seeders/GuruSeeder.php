<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all();
        for($i = 1 ; $i <= 5 ; $i++){
            Guru::create([
                'user_id' => $user->random()->id,
                'porfolio' => 'porfolio',
            ]);
        }
    }
}
