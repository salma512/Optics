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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agency_id');
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('brand_id');
            $table->decimal('price');
            $table->string('name');
            $table->text('description');
            $table->binary('photos');
            $table->timestamps();

            $table->foreign('agency_id')->references('id')->on('agencies');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');

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
};
