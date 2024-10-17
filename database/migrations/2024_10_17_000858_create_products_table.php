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
            $table->string('name');
            $table->text('description');
            $table->string('currency')->default('USD'); // currency of the product price
            $table->string('price'); // Price of the product
            $table->string('download_link')->nullable(); // Download link for customers
            $table->string('category')->nullable(); // Product type (e.g., 'script', 'app')
            $table->json('technologies')->nullable(); // JSON array of tech used
            $table->string('license_key')->nullable(); // License key for product if applicable
            $table->boolean('is_available')->default(true); // Availability status
            $table->boolean('is_featured')->default(false); // Highlights top products on the website
            $table->json('media_files')->nullable(); // Media associated with the product
            $table->string('support_email')->nullable(); // Support contact for product issues
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
