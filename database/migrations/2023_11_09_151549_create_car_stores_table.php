<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_stores', function (Blueprint $table) {
            $table->bigInteger('car_id');
            $table->string('car_info');
            $table->boolean('was_rented');
            $table->bigInteger('rent_price');
            $table->string('img_patch');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_stores');
    }
}
