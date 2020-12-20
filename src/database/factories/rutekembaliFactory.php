<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\rutekembali;
use Illuminate\Database\Eloquent\Factories\Factory;

class rutekembaliFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = rutekembali::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "id_rute_kembali"=>$this->faker->numerify("###"),
            "jalur_kembali"=>$this->faker->randomElement($array = array ('tol','jalanRaya')),
        ];
    }
}
