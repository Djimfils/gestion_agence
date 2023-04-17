<?php

namespace Database\Factories;

use App\Models\Salaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalaireFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Salaire::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'montant' => $this->faker->buildingNumber,
            'date' => $this->faker->date($format = 'Y-m-d', $max ='now')

        ];
    }
}
