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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained()->onDelete('cascade'); // References the specific menu
            $table->foreignId('page_id')->nullable()->constrained()->onDelete('set null'); // Links to a specific page (can be null for non-page links)
            $table->foreignId('parent_id')->nullable()->constrained('menu_items')->onDelete('cascade'); // Parent menu item for dropdowns
            $table->string('label'); // Label for the menu item
            $table->string('url')->nullable(); // Custom URL for external links
            $table->integer('order')->default(0); // Display order
            $table->boolean('is_active')->default(true); // Toggle menu item visibility
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
