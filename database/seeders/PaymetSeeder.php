<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Paymet::factory(10)->create();
    }
}
