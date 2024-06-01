<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BidrequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Bidrequest::factory(10)->create();
    }
}
