<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GarageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition():array
    {
        return [
            //
            'name'    => $this->faker->name,
            'zipcode' => $this->faker->postcode,
            'lat'     => 45.9432 + random_int( 0, 20 ) / 10 * $this->faker->randomElement([-1, 1]),
            'lng'     => 24.9668 + random_int( 0, 20 ) / 10 * $this->faker->randomElement([-1, 1])
        ];
    }
}
