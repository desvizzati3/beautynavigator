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
            $table->string('nama_produk');
            $table->string('brand');
            $table->string('deskripsi');
            $table->string('image')->nullable();
            // $table->foreignId('skintone_id')->constrained('skintones')->onDelete('cascade')->indexName('review_skintone_id');
            // $table->foreignId('undertone_id')->constrained('undertones')->onDelete('cascade')->indexName('review_undertone_id');
            // $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->indexName('review_category_id');
            $table->foreignId('skintone_id')->constrained(
                table: 'skintones',
                indexName: 'review_skintone_id'
            )->onDelete('cascade');
            $table->foreignId('undertone_id')->constrained(
                table: 'undertones',
                indexName: 'review_undertone_id'
            )->onDelete('cascade');
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'review_category_id'
            )->onDelete('cascade');
            $table->timestamps();
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
