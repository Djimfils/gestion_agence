<?php

namespace Database\Factories;

use App\Models\Apprenti;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApprentiFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Apprenti::class;

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
            'age' => $this->faker->numberBetween($int1 = 18, $int2 = 35),
            'adresse' => $this->faker->lastName,
            'telephone' => $this->faker->unique()->phoneNumber,
            'dateEmbauche' => $this->faker->date($format = 'Y-m-d', $max ='now'),
            'salaire_id' => rand(1, 20),
            'prime_id' => rand(1, 20)
        ];
    }
}
