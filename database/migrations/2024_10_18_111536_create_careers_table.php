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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('title');  // Job title (e.g., Software Engineer, Product Manager)
            $table->string('slug')->unique();  // URL-friendly version of the job title
            $table->string('department')->nullable();  // Department (e.g., Development, Marketing)
            $table->text('description');  // Detailed job description
            $table->string('location')->nullable()->default('Remote');  // Location of the job (default: Remote)
            $table->string('employment_type')->default('Remote');  // Full-time, Part-time, Contract, etc.
            $table->string('experience_level')->nullable();  // Required experience level (e.g., Entry, Mid, Senior)
            $table->string('salary_range')->nullable();  // Optional salary range for the job
            $table->text('requirements');  // Required qualifications/skills for the role
            $table->text('responsibilities')->nullable();  // Key responsibilities of the job
            $table->string('application_link')->nullable();  // Link to apply for the job
            $table->timestamp('closing_date')->nullable();  // Application closing date
            $table->boolean('is_featured')->default(false);  // Whether the job is featured
            $table->boolean('is_active')->default(true);  // Whether the job posting is active or not
            $table->timestamps();  // Created and updated timestamps
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
