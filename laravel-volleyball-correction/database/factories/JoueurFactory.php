<?php

namespace Database\Factories;

use App\Models\Joueur;
use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Joueur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'age' => $this->faker->numberBetween(18, 37),
            'phone'=>$this->faker->e164PhoneNumber(),
            'email'=>$this->faker->email(),
            'genre_id'=>$this->faker->numberBetween(1, 2),
            'origine'=>$this->faker->country(),
            'role_id'=>$this->faker->numberBetween(1, 4),
            'equipe_id'=>$this->faker->numberBetween(1, 5),
            'created_at'=>now()
        ];
    }
}
