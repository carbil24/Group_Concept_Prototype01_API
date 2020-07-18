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
            $table->bigIncrements('id');
            $table->string('prod_code')->unique();
            $table->string('title')->nullable();
            $table->string('um')->nullable();
            $table->bigInteger('supplier_id')->unsigned()->index();
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->bigInteger('sector_id')->unsigned()->index();
            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('brand')->nullable();
            $table->double('unity_price')->nullable();
            $table->double('sug_retail_price')->nullable();
            $table->string('item_code')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('image_path')->nullable();
            $table->text('detailed_desc')->nullable();

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
        Schema::dropIfExists('products');
    }
}
