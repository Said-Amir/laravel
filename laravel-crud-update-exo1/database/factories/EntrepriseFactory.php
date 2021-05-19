<?php

namespace Database\Factories;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entreprise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->word(),
            'adresse'=>$this->faker->address(),
            'numTel'=>$this->faker->e164PhoneNumber(),
            'personneContact'=>$this->faker->name(),
            'image'=>$this->faker->imageUrl(640,480),
        ];
    }
}
