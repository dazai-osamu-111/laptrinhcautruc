<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->bigInteger('orderId');
            $table->bigInteger('productId');
            $table->string('productName');
            $table->string('productStatus');
            $table->string('price');
            $table->bigInteger('quantity');
            $table->string('img');
            $table->string('size');
            $table->string('color');
            $table->string('status');
            $table->string('payment_method');
            $table->bigInteger('userId');
            $table->dateTime('created_at', $precision = 0);
            $table->dateTime('update_at', $precision = 0);
            $table->dateTime('shiptime_start_at', $precision = 0);
            $table->dateTime('completed_at', $precision = 0);
            $table->dateTime('paytime', $precision = 0);
            $table->dateTime('order_time', $precision = 0);
            $table->string('DistrictID');
            $table->string('ProvinceID');
            $table->string('WardCode');
            $table->string('detailAddress');
            $table->bigInteger('ship_price');
            $table->bigInteger('total_price');
            $table->string('comment');
            $table->string('rate');

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
};
