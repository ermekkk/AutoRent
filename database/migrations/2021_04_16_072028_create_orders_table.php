<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->integer('user_id');
            $table->string('addres');
            $table->date('get_date');
            $table->date('set_date');
            $table->double('total');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('returncar_id');
            $table->string('returncar')->default(NULL);
            $table->string('getcar')->default(NULL);
            $table->integer('getcar_id');
            $table->integer('pay');
            $table->integer('status_id')->default(NULL);
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
        Schema::dropIfExists('orders');
    }
}
