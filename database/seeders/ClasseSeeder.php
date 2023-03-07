<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salles')->insert([
            'nomSalle'=>'s11',
            'capacite'=>'80',
            'emplacement'=>'deuxieme niveau du departement d\'informatique',
            // 'emplacement'=>'departememt info au premier niveau',
            // 'Nsalle'=>'1',
        ]);
    }
}
