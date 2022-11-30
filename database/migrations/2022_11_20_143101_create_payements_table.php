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
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('payementMethode_id');
            $table->date('date');
            $table->integer('discount');
            $table->integer('amount');
            $table->string('status');
            $table->string('contextPayement');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('payementMethode_id')->references('id')->on('payement_methods');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payements');
    }
};
