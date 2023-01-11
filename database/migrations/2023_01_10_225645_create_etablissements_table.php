<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->string('nomEtablissement')->primary();
            $table->integer('superficie');
            
            $table->string('nomDepartement');
            $table->foreign('nomDepartement')->references('nomDepartement')->on('departements');

            $table->string('nomSalle');
            $table->foreign('nomSalle')->references('nomSalle')->on('salles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissements');
    }
}
