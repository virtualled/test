<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersProductsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products_details', function (Blueprint $table) {
            $table->id();
            $table->integer('width');
            $table->integer('quantity');
            $table->float('thickness');
            $table->float('weight');
            $table->float('sum');
            $table->integer('product_id');
            $table->integer('warehouse_id');
            $table->integer('commodity_id');
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
        Schema::dropIfExists('orders_products_details');
    }
}
