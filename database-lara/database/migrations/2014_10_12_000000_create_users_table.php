<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{

    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->string('name');
            $table->string('email',50)->unique();
            $table->string('username');
            $table->string('password');
            $table->boolean('active');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}