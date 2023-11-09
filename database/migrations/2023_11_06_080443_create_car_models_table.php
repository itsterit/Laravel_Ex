<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->bigInteger('model_id')->index();
            $table->string('model_name');
            $table->bigInteger('car_brand_id');
            $table->bigInteger('car_body_id');
            $table->bigInteger('car_engine_id');
            $table->boolean('was_rented');
            $table->bigInteger('rent_price');
            $table->string('img_patch');
            $table->timestamps();
            
            $table->foreign('car_brand_id')->references('brand_id')->on('brands');
            $table->foreign('car_body_id')->references('body_type_id')->on('bodytypes');
            $table->foreign('car_engine_id')->references('engine_type_id')->on('enginetypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_models');
    }
}
