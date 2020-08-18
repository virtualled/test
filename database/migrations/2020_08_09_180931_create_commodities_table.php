<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('commodity_name');
            $table->float('purchase_price');
            $table->float('purchase_sum');
            $table->float('weight');
            $table->float('balance');
            $table->integer('thickness');
            $table->integer('width');
            $table->date('supply_date')->default('2020-08-12');
            $table->integer('manufacturer_id');
            $table->integer('owner_id');
            $table->unsignedBigInteger('warehouse_id')->index();
            $table->foreign('warehouse_id')->references('id')->on('warehouses');
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
        Schema::dropIfExists('commodities');
    }
}
