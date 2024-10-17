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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null'); // Staff member who created the schedule
            $table->string('title'); // Schedule type, e.g., "30-minute call"
            $table->text('description'); // Description of the schedule type
            $table->integer('duration_minutes'); // Duration in minutes, e.g., 30
            $table->string('department')->nullable(); // Optional department restriction
            $table->string('role')->nullable(); // Optional role restriction for specific roles
            $table->boolean('is_active')->default(true); // Status of the schedule type
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
