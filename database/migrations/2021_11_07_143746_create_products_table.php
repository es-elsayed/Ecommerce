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
            $table->string('sku')->nullable();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('slug')->unique();
            $table->string('details_en');
            $table->string('details_ar');
            $table->text('description_en');
            $table->text('description_ar');
            $table->unsignedInteger('quantity');
            $table->string('main_image');
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->boolean('sale')->default(0);
            $table->boolean('featured')->default(0);
            $table->boolean('status')->default(1);
            $table->foreignId('brand_id');

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
