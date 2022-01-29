<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('route_id');
            $table->integer('calendar_id');
            $table->string('vinculation_route')->nullable();
            $table->integer('route_circular');
            $table->dateTime('date_init');
            $table->dateTime('date_finish');
            $table->integer('mon');
            $table->integer('tue');
            $table->integer('wed');
            $table->integer('thu');
            $table->integer('fri');
            $table->integer('sat');
            $table->integer('sun');

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
        Schema::dropIfExists('routes_data');
    }
}
