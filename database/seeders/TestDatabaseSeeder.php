<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\SpotAttributeSeeder;

class TestDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        //
        $this->call(SizeSeeder::class);
        $this->call(SpotAttributeSeeder::class);
    }
   
}
