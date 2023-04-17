<?php

namespace Database\Factories;

use App\Models\Prime;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrimeFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Prime::class;
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
