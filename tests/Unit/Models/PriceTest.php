<?php
namespace Tests\Unit\Models;

use Tests\TestCase;

use DatabaseMigrations;
class PriceTest extends TestCase
{
    public function test_price_test()
    {
        //$this->assertTrue(true);
        //dd(Size::get()->toArray());
        $garage=Garage::factory()->create();

        $price=Price::factory()->create([
            'garage_id'=>$garage->id
        ]);

        dd($garage->prices->toArray());


        $spot=Spot::factory()->create([
            'garage_id'=>$garage->id
            //'spot'
        ]);


        dd($garage->spots()->first()->garage);
    }
}