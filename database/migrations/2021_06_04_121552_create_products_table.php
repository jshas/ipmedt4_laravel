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
            $table->string('brand');
            $table->string('model');
            $table->integer('price');
            $table->string("category")->references('category')->on('category');
            $table->string("sub_category")->references('sub_category')->on('sub_category');
            $table->string('description');
            $table->string('img_alt')->default('Een afbeelding van een thuiswerkproduct.');
            $table->string('img_path')->default('/img/placeholder.png');
            $table->boolean('permission_needed')->default(true); // Bestelling vereist toestemming van de manager
            $table->integer('order_limit')->default(1); // Kwantiteit van een product per enkele order
            $table->integer('rule_id')->references('id')->on('rules')->nullable();
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
