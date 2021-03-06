<?php

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
            $table->integer('id_reseller')->unsigned();
            $table->foreign('id_reseller')->references('id')->on('resellers');
            $table->string('name');
            $table->string('lasname');
            $table->string('username', 8)->unique();
            $table->string('email')->unique();
            $table->string('domain')->unique();
            $table->string('package');
            $table->string('hostname');
            $table->string('password', 60);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
