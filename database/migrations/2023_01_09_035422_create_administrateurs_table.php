<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->integer('idAdmin')->primary();
            $table->string('nomAdmin');
            $table->string('prenomAdmin');
            
            // $table->integer('idEnseignant');
            // $table->foreign('idEnseignant')->references('idEnseignant')->on('enseignants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrateurs');
    }
}
