<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservTerrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserv_terrains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('terrain_id')->constrained()->onDelete('cascade');
            $table->date('jour');
            $table->date('jourdeprise');
            $table->time('debut');
            $table->time('fin');
            $table->string('motif');
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
        Schema::dropIfExists('reserv_terrains');
    }
}
