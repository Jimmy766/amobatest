<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('picture')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->dateTime('last_online')->nullable();
            $table->string('verification_code')->nullable();
            $table->string('new_email')->nullable();
            $table->integer('status')->default(0);
            $table->integer('first')->default(0);
            $table->dateTime('last_accept_date')->nullable();
            $table->dateTime('created')->nullable();
            $table->dateTime('modified')->nullable();
            $table->string('company_contact')->nullable();
            $table->decimal('credits')->nullable();
            $table->integer('first_trip')->default(0);
            $table->integer('incomplete_profile')->default(0);
            $table->integer('phone_verify')->default(0);
            $table->string('token_auto_login')->nullable();
            $table->integer('user_vertical')->nullable();
            $table->integer('language_id')->nullable();
            $table->integer('no_registered')->nullable();
            $table->softDeletes();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
