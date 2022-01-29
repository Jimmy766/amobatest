<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('external_id')->nullable();
            $table->string('external_budget_id')->nullable();
            $table->string('external_route_id')->nullable();
            $table->string('track_id')->nullable();
            $table->string('name')->nullable();
            $table->string('notes')->nullable();
            $table->dateTime('timestamp')->nullable();
            $table->string('arrival_address')->nullable();
            $table->dateTime('arrival_timestamp')->nullable();
            $table->string('departure_address')->nullable();
            $table->dateTime('departure_timestamp')->nullable();
            $table->integer('capacity');
            $table->integer('confirmed_pax_count');
            $table->integer('reported_departure_timestamp')->nullable();
            $table->string('reported_departure_kms')->nullable();
            $table->string('reported_arrival_timestamp')->nullable();
            $table->string('reported_arrival_kms')->nullable();
            $table->integer('reported_vehicle_plate_number')->nullable();
            $table->integer('status')->nullable();
            $table->longText('status_info')->nullable();
            $table->string('reprocess_status')->nullable();
            $table->string('return')->nullable();
            $table->dateTime('created')->nullable();
            $table->dateTime('modified')->nullable();
            $table->longText('synchronized_downstream')->nullable();
            $table->longText('synchronized_upstream')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('sale_tickets_drivers')->nullable();
            $table->longText('notes_drivers')->nullable();
            $table->longText('itinerary_drivers')->nullable();
            $table->string('cost_if_externalized')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
