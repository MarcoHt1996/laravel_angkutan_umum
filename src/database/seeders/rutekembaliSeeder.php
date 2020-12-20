<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class rutekembaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\rutekembali::factory()
        ->count(4)
        ->create();
    }
}
