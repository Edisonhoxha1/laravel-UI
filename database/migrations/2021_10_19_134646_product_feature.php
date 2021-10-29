<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductFeature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductFeature', function (Blueprint $table) {
            $table->id();
            $table->string('productsName');
            $table->string('imageUrl');
            $table->string('name');
            $table->string('code');
            $table->integer('price');
            $table->integer('discountPrice');
            $table->string('description');
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
        //
    }
}
