<?php

namespace Database\Factories;

use App\Models\Personne;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personne::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->firstName(),
            'prenom'=>$this->faker->lastName(),
            'age'=>$this->faker->numberBetween(12, 49),
            'dob'=>$this->faker->date('Y-m-d','now'),
            'genre'=>$this->faker->randomElement(array ('Homme','Femme'))
        ];
    }
}