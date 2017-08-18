<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->uuid('id');
            $table->unsignedInteger("customer_id");
            $table->string("coin_type",128);
            $table->string("price_type",128);
            $table->double("price_hour")->nullable();
            $table->double("total_amount");
            $table->double("total");
            $table->integer("status")->default(1);
            $table->timestamps();

            //Contrains
            $table->primary("id");
            $table->foreign('customer_id')
                ->references('id')->on('customers');
            $table->foreign('coin_type')
                ->references('id')->on('multitypes');
            $table->foreign('price_type')
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
        Schema::dropIfExists('budgets');
    }
}
