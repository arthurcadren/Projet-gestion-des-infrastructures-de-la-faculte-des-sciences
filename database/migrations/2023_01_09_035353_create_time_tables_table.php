<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_tables', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->integer('idEmploie')->primary();
            $table->string('matiere');
            $table->date('Date');
            $table->time('temps');

            $table->string('nomSalle');
            $table->foreign('nomSalle')->references('nomSalle')->on('salles');

            // $table->integer('idAdmin');
            // $table->foreign('idAdmin')->references('idAdmin')->on('administrateurs');

            // $table->string('matricule_etudiant');
            // $table->foreign('matricule_etudiant')->references('matricule')->on('etudiants');

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
        Schema::dropIfExists('time_tables');
    }
}
