<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinalsialreportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Finalsialreport::factory(10)->create();
    }
}
