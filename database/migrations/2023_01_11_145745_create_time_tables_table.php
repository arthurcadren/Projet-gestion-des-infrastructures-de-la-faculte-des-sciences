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
            $table->id('idEmploie'); /*--------------------------- */
            //$table->timestamps();

            //$table->integer('idEmploie')->primary()->autoincrment();
            $table->enum('evenement',['Cour','CC','SN','TP','TD','Vide','Administratif','Soutenance']);/*------------------------ */
            $table->string('nomevent');/*--------------------------*/
            $table->enum('filiere',['ICT4D','Informatique','Mathematique','Physique','Aucune']);/*----------------------------*/
            $table->enum('niveau',['L1','L2','L3','M1','M2','D1','D2','Administratif','Aucun']);/*----------------------------*/
            $table->enum('Date',['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche']);/*------------------------------*/
            $table->time('tempsdebut');/*----------------------------*/
            $table->time('tempsfin');/*----------------------------*/
            $table->string('nomSalle');
            $table->foreign('nomSalle')->references('nomSalle')->on('salles')->onDelete('cascade')->onUpdate('cascade');
            /*-------------------------------------*/
            //  $table->integer('idAdmin');
            //  $table->foreign('idAdmin')->references('idAdmin')->on('administrateurs')->null();

            //  $table->string('matricule_etudiant');
            //  $table->foreign('matricule_etudiant')->references('matricule')->on('etudiants')->null();

            //  $table->integer('idEnseignant');
            //  $table->foreign('idEnseignant')->references('idEnseignant')->on('enseignants')->null();
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
