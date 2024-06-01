<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SertifandskilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Sertifandskil::factory(10)->create();
    }
}
