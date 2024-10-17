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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Page title
            $table->string('slug')->unique(); // SEO-friendly URL slug
            $table->text('content'); // HTML content of the page
            $table->string('meta_title')->nullable(); // SEO title for the page
            $table->text('meta_description')->nullable(); // SEO description for the page
            $table->text('keywords')->nullable(); // SEO keywords
            $table->boolean('is_published')->default(true); // Publish status of the page
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
