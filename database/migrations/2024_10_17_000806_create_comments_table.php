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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // The post being commented on
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // The user who made the comment
            $table->text('content'); // Content of the comment
            $table->integer('upvotes')->default(0);  // Count of upvotes
            $table->integer('downvotes')->default(0);  // Count of downvotes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
