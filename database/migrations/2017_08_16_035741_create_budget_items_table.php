<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string("budget_id");
            $table->unsignedInteger("item_id");
            $table->double("price");
            $table->double("amount");
            $table->integer("status")->default(1);
            $table->timestamps();

            //Contrains
            $table->foreign('budget_id')
                ->references('id')->on('budgets');
            $table->foreign('item_id')
                ->references('id')->on('items');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budget_items');
    }
}
