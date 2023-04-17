<?php

namespace Database\Factories;

use App\Models\Mecanicien;
use Illuminate\Database\Eloquent\Factories\Factory;

class MecanicienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'nationalite' => $this->faker->lastName,
            'age' => $this->faker->numberBetween($int1 = 25, $int2 = 60),
            'adresse' => $this->faker->lastName,
            'telephone' => $this->faker->unique()->phoneNumber,
            'dateEmbauche' => $this->faker->date($format = 'Y-m-d', $max ='now'),
            'domaine' => $this->faker->lastName,
            'salaire_id' => rand(1, 20),
            'prime_id' => rand(1, 20),
        ];
    }
}
