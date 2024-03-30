<?php

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
        Schema::create('product_recipe', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                ->nullable()
                ->constrained('products')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('recipe_id')
                ->nullable()
                ->constrained('recipes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_recipe');
    }
};
