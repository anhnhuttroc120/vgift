<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('slug');
            $table->string('name');
            $table->text('image');
            $table->text('description');
            $table->text('content');
            $table->decimal('price',50,0);
            $table->tinyInteger('status')->default(0);
            $table->integer('sales')->nullable()->default(0);
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->text('tag');
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
