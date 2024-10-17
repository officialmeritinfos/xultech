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
        Schema::create('client_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // References the client
            $table->foreignId('booking_id')->nullable()->constrained('bookings')->onDelete('set null'); // Corrected to reference bookings table
            $table->foreignId('staff_id')->nullable()->constrained('users')->onDelete('set null'); // Assigned staff member
            $table->string('name'); // Project name
            $table->text('description'); // Project description
            $table->string('status')->default('not started'); // Status: e.g., not started, in progress, completed
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('progress_notes')->nullable(); // Notes on the current project progress
            $table->string('estimated_cost')->nullable(); // Estimated cost for the project
            $table->string('project_manager')->nullable(); // Name of the project manager
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_projects');
    }
};
