<?php

namespace Database\Seeders;

use App\Filament\Admin\Widgets\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all();
        for($i = 1 ; $i <= 5 ; $i++){
            Siswa::create([
                'user_id' => $user->random()->id,
                'jenjang_pendidikan' => 'SMA',
                'profile' => 'profile',
            ]);
        }
    }
}
