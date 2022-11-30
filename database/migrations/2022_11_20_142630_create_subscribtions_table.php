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
        Schema::create('subscribtions', function (Blueprint $table) {
            $table->id();
            $table->string('agency_name');
            $table->text('agency_description');
            $table->string('adress');
            $table->string('phone');
            $table->string('email');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('subscribtion_date');
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
        Schema::dropIfExists('subscribtions');
    }
};
