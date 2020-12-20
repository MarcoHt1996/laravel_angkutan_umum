<?php

namespace Database\Factories;

use App\Models\Angkutan;
use Illuminate\Database\Eloquent\Factories\Factory;

class AngkutanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Angkutan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id_angkutan"=>$this->faker->numerify("###"),
            "nopol_angkutan" => $this ->faker->numerify("####"),
            "jurusan"=>$this->faker->randomElement($array = array ('bandaaceh','medan','pekanbaru','riau','jambi')),
            "tarif"=>$this->faker->numberBetween(30, 300,),
        ];
    }
}
