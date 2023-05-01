<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('droits', function (Blueprint $table) {
            $table->id('id_droit');
            $table->foreignId('utilisateur_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            /*$table->integer('id_utilisateur');
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('user_vehicules');*/
            $table->boolean('administrateur');
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
        Schema::dropIfExists('droits');
    }
}
