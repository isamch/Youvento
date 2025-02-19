<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Seeder;

class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin\Poste::factory(10)->create();
    }
}
