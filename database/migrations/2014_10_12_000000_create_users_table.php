<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->string('name');
          $table->string('email')->unique()->nullable();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password')->nullable();
          $table->string('poto')->nullable();
          $table->string('avatar')->nullable();
          $table->string('provider_id')->unique();
          $table->string('provider_name');
          $table->rememberToken()->nullable();
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
