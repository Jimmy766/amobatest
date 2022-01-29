<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_plan_id')->nullable();
            $table->integer('route_id')->nullable();
            $table->string('track_id')->nullable();
            $table->dateTime('reservation_start')->nullable();
            $table->dateTime('reservation_end')->nullable();
            $table->integer('route_stop_origin_id')->nullable();
            $table->integer('route_stop_destination_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('reservations');
    }
}
