<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ruteberangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\ruteberangkat::factory()
        ->count(4)
        ->create();
    }
}
