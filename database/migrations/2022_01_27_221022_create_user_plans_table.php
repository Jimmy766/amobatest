<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('currency_id');
            $table->integer('next_user_plan_id')->nullable();
            $table->dateTime('start_timestamp')->nullable();
            $table->dateTime('end_timestamp')->nullable();
            $table->dateTime('renewal_timestamp')->nullable();
            $table->decimal('renewal_price')->nullable();
            $table->integer('requires_invoice');
            $table->integer('status');
            $table->dateTime('created')->nullable();
            $table->dateTime('modified')->nullable();
            $table->integer('financiation');
            $table->integer('status_financiation');
            $table->string('language')->nullable();
            $table->string('nif')->nullable();
            $table->string('business_name')->nullable();
            $table->integer('pending_payment')->nullable();
            $table->dateTime('date_max_payment')->nullable();
            $table->dateTime('proxim_start_timestamp')->nullable();
            $table->dateTime('proxim_end_timestamp')->nullable();
            $table->dateTime('proxim_renewal_timestamp')->nullable();
            $table->dateTime('proxim_renewal_price')->nullable();
            $table->decimal('credits_return')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('cancel_employee')->nullable();
            $table->integer('force_renovation')->nullable();
            $table->dateTime('date_canceled')->nullable();
            $table->decimal('amount_confirm_canceled')->nullable();
            $table->decimal('credit_confirm_canceled')->nullable();
            $table->decimal('cost_center_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_plans');
    }
}
