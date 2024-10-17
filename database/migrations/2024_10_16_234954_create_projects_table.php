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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('client_name');
            $table->text('description');
            $table->string('status')->default('completed'); // e.g., 'completed', 'ongoing'
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->decimal('cost', 10, 2)->nullable(); // Total project cost
            $table->string('project_url')->nullable(); // Link to project demo or client website
            $table->json('technologies_used')->nullable(); // JSON array of technologies (e.g., Laravel, Vue.js)
            $table->json('media_files')->nullable(); // JSON for URLs of images/videos related to the project
            $table->foreignId('manager_id')->constrained('users')->onDelete('cascade'); // Manager overseeing the project
            $table->string('category')->nullable(); // e.g., 'web development', 'mobile app', etc.
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
