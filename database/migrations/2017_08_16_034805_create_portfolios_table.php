<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->uuid('id');
            $table->string("banner");
            $table->string("title");
            $table->longText("body");
            $table->string("label_type",128)->nullable();
            $table->integer("status")->default(1);
            $table->timestamps();

            //Contrains
            $table->primary("id");
            $table->foreign('label_type')
                ->references('id')->on('multitypes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
