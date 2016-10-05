<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableClientCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('client_id');
            $table->String('frist_name',25);
            $table->String('last_name',25);
            $table->tinyInteger('phone_number')->length(16)->unsigned();
            $table->String('email',100);
            $table->String('street',100);
            $table->String('sub_stree',100);
            $table->String('city',30);
            $table->String('state',30);
            $table->char('postal_code',6);
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
        Schema::dropIfExists('client');
    }
}
