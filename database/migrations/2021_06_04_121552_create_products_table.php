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
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->integer('price');
            $table->string('description');
            $table->string('img_name');
            $table->string('img_path')->default('/uploads/placeholder.png');
            $table->string("category")->references('category')->on('category');
            $table->string("sub_category")->references('sub_category')->on('sub_category');
            $table->integer('limit')->default(1);
            $table->boolean('permission')->default(true);
            $table->integer('rule')->references('id')->on('rules');
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
