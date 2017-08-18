<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultitypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multitypes', function (Blueprint $table) {
            $table->string("id",128)->primary();
            $table->string("parent_id",250)->nullable();
            $table->string("descrip");
            $table->integer("status")->default(1);

            $table->timestamps();

            //Contrains
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multitypes');
    }
}
