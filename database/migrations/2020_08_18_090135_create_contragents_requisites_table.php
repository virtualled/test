<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContragentsRequisitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contragents_requisites', function (Blueprint $table) {
            $table->id();
            $table->text('company_address');
            $table->text('post_address');
            $table->integer('inn');
            $table->integer('kpp');
            $table->integer('account');
            $table->integer('corr_acc');
            $table->text('bank_name');
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
        Schema::dropIfExists('contragents_requisites');
    }
}
