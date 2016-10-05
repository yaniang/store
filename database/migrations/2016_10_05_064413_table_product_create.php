<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableProductCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->String('product_name',150);
            $table->Integer('procut_price')->unsigned();
            $table->text('product_description');
            $table->tinyInteger('category_id')->unsigned();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE product ADD product_picture MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
