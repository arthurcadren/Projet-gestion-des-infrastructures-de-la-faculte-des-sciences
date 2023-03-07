<?php

namespace Database\Factories;

use App\Models\Size;
use App\Models\Garage;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'garage_id' => Garage::factory()->create(),
            'size_id'   => Size::inRandomOrder()->first()->id,
            'floor'     => rand(-15, 15),
            'number'    => rand(1, 150), 
        ];
    }
}
