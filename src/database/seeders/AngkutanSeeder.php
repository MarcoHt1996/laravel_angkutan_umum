<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AngkutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Angkutan::factory()
        ->count(4)
        ->create();
    }
}
