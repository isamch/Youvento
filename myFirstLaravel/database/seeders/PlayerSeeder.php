<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\image\Player::factory(10)->count(10)->create();
    }
}
