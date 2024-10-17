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
        Schema::create('comment_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comment_id')->constrained('comments')->onDelete('cascade'); // The initial comment
            $table->foreignId('response_to_id')->nullable()->constrained('comment_responses')->onDelete('cascade'); // Response being replied to
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User who responded
            $table->text('content'); // Content of the response
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
        Schema::dropIfExists('comment_responses');
    }
};
