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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->decimal("price", 8, 2);
            $table->timestamps();

            // Foreign keys básicas
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('branch_id')->constrained('branch')->onDelete('cascade');

            
            $table->unsignedBigInteger('imagenes_product_id')->nullable();

            
            $table->foreign('imagenes_product_id')
                  ->references('id')
                  ->on('imagenes_product')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
