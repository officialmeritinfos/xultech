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
        Schema::create('teams', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Full name of the team member
            $table->string('position'); // Job title or role within the company
            $table->string('department')->nullable(); // Department within the company (optional)
            $table->string('photo')->nullable(); // Path to the profile photo
            $table->text('bio')->nullable(); // Short biography of the team member
            $table->string('email')->nullable(); // Contact email for the team member
            $table->string('phone')->nullable(); // Contact phone number for the team member
            $table->string('linkedin_url')->nullable(); // LinkedIn profile URL
            $table->string('twitter_url')->nullable(); // Twitter profile URL
            $table->string('facebook_url')->nullable(); // Facebook profile URL
            $table->string('instagram_url')->nullable(); // Instagram profile URL
            $table->integer('order')->default(0); // Order for sorting the team member on the website
            $table->boolean('is_active')->default(true); // Status to activate/deactivate profile
            $table->timestamps(); // Created and updated timestamps
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
