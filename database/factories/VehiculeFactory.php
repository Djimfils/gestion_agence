<?php

namespace Database\Factories;

use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Vehicule::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'immatriculation' => $this->faker->swiftBicNumber,
            'marque' => $this->faker->name,
            'modele' => $this->faker->name,
            'dateAchat' => $this->faker->dateTime
        ];
    }
}
