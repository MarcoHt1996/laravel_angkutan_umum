<?php

namespace Database\Factories;

use App\Models\ruteberangkat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ruteberangkatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ruteberangkat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "id_rute_berangkat"=>$this->faker->numerify("###"),
            "jalur_berangkat"=>$this->faker->randomElement($array = array ('tol','jalanRaya')),
        ];
    }
}
