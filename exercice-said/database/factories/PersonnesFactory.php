<?php

namespace Database\Factories;

use App\Models\Personnes;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonnesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personnes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->lastName(),
            'prenom'=>$this->faker->firstName(),
            'age'=>$this->faker->numberBetween(12,49),
            'dob'=>$this->faker->date('Y-m-d','now'),
            'genre'=>$this->faker->randomElement(array ('Homme','Femme'))
        ];
    }
}