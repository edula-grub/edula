<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BiderlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Biderlist::factory(10)->create();
    }
}
