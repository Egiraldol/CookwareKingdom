<?php

// By Mariana Gutierrez Jaramillo

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('total');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
<<<<<<< HEAD:database/migrations/2024_04_02_142011_create_order_items_table.php
=======

            //Foreign Keys

            /**
            *$table->unsignedBigInteger('productId');
            *$table->foreign('productId')->references('id')->on('products');

            *$table->unsignedBigInteger('orderId');
            *$table->foreign('orderId')->references('id')->on('orders');
            */
>>>>>>> develop:database/migrations/2024_03_20_222310_create_order_products_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
