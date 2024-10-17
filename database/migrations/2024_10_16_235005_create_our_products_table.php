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
        Schema::create('our_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('category')->nullable(); // Product type (e.g., 'SaaS', 'Mobile App')
            $table->string('status')->default('active'); // e.g., 'active', 'discontinued'
            $table->string('website')->nullable(); // Product website
            $table->string('icon_path')->nullable(); // Path to the product icon
            $table->json('features')->nullable(); // JSON array of product features
            $table->json('versions')->nullable(); // List of versions with details
            $table->string('license_type')->nullable(); // e.g., 'perpetual', 'subscription'
            $table->json('media_files')->nullable(); // Product-related images, videos
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_products');
    }
};
