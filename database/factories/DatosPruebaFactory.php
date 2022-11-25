<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DatosPruebaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'string' => $this->faker->sentence(),
            'caracter' => 'a',
            'decimal' => 3.15,
            // 'boolean' => true
        ];
    }
}
