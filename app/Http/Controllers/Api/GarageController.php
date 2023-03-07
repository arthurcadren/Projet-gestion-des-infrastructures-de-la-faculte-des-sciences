<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    //
    public function index(Request $request) : GarageIndexResourceCollection
    {
        return new GarageIndexResourceCollection(
            Garage::withCount([
                'spots as total_spots',
                'spots as free_spots' => function(Builder $query) {
                    $query->whereDoesntHave('reservations', function(Builder $query) {
                        $query->whereRaw("? BETWEEN start AND end", [now()]);
                    });
                }
            ])->get()
        );
    }

    public function show(Garage $garage): GarageShowResource
    {
        $garage->load('prices.size', 'spotAttributes');

        return new GarageShowResource($garage);
    }
}
