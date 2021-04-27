<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('name');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->text('description');
            $table->double('price')->default(0);
            $table->string('year');
            $table->integer('gear_id');
            $table->integer('rudder_id');
            $table->integer('homing_id');
            $table->text('image');
             $table->string('color');
            $table->boolean('rent')->default(0);
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
        Schema::dropIfExists('products');
    }
}
