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
        Schema::create('user_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Reference to the users table
            $table->string('ip_address')->nullable();  // Store user's IP address
            $table->string('location')->nullable();    // Optional, to store geolocation
            $table->string('action');                  // Description of the activity
            $table->string('device')->nullable();      // Device used for the activity (mobile, desktop, etc.)
            $table->string('browser')->nullable();     // Browser used for the activity
            $table->timestamp('performed_at');         // When the activity was performed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_activities');
    }
};
