<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BidchatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Bidchat::factory(10)->create();
    }
}
