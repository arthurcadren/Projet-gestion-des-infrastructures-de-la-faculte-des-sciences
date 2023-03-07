<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Spot;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'spot_id' => Spot::factory(),
            'user_id' => User::factory(),
            'start'   => $now = Carbon::now(),
            'end'     => $now->clone()->addHours(rand(1, 28)),
            'paid_at' => null,
        ];
    }
}
