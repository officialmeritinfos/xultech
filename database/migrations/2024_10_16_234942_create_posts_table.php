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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content'); // Content that supports markdown for code blocks
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Author reference
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->string('slug')->unique(); // For SEO-friendly URLs
            $table->boolean('allow_comments')->default(true); // Toggle for comment permissions
            $table->string('tags')->nullable(); // Tags for better categorization (comma-separated)
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null'); // Creator (admin/manager only)
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('set null'); // Last updater
            $table->timestamp('published_at')->nullable(); // Timestamp for published posts
            $table->unsignedInteger('views')->default(0); // View count tracking
            $table->integer('upvotes')->default(0);  // Count of upvotes
            $table->integer('downvotes')->default(0);  // Count of downvotes
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
