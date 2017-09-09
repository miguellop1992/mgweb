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
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->dateTime("birth")->nullable();
            $table->string("degress")->nullable();
            $table->double("price_hour")->nullable();
            $table->string("label_type",128)->nullable();
            $table->integer("status")->default(1);
            $table->rememberToken();
            $table->timestamps();

            //Contrains
            $table->foreign('label_type')->references('id')->on('multitypes');
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
