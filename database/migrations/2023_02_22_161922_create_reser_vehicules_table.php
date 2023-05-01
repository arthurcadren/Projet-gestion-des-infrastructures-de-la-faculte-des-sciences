<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reser_vehicules', function (Blueprint $table) {
            $table->id();
            //$table->integer('id_reservation')->primary();
            $table->string('utilisateur_id');
            $table->foreign('utilisateur_id')->references('matricule')->on('utilisateurs')->constrained()->onDelete('cascade')->onUpdate('cascade');
            

            /*$table->integer('id_vehicule');
            $table->foreign('id_vehicule')->references('id_vehicule')->on('vehicules')->constrained()->onDelete('cascade');*/
            //$table->foreignId('utilisateur_id')->constrained()->onDelete('cascade');
            $table->string('numero_plaque');
            $table->foreign('numero_plaque')->references('numero_plaque')->on('vehicules')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->datetime('date_reservation');
            $table->datetime('date_debut');
            $table->datetime('date_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reser_vehicules');
    }
}
