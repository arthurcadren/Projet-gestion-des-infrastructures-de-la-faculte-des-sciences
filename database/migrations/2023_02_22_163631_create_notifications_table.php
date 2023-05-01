<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            /*$table->integer('id_reservation');
            $table->foreign('id_reservation')->references('id_reservation')->on('reser_vehicules');
            */
            $table->foreignId('reser_vehicule_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('type_notification');
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
        Schema::dropIfExists('notifications');
    }
}
