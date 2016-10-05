<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableOrderDetailCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->increments('order_detail_id');
            $table->dateTime('order_date');
            $table->String('product_code');
            $table->integer('product_price')->unsigned();
            $table->tinyInteger('quantity')->unsigned();
            $table->Integer('total_price')->unsigned();
            $table->Integer('order_id')->unsigned();
            $table->mediumInteger('product_id');
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
        Schema::dropIfExists('order_detail');
    }
}
