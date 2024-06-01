<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Paymethod::factory(10)->create();
    }
}
