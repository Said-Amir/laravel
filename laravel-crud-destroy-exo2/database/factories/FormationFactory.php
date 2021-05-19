<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->randomElement(array ('Coding School','Marketing Lab', "Webmaster School")),
            'nbPersonnes'=>$this->faker->numberBetween(30, 65),
            'nbPersonnesHC'=>$this->faker->numberBetween(5,15),
            'description'=>$this->faker->catchPhrase()
        ];
    }
}