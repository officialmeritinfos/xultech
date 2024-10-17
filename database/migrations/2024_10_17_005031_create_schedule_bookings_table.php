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
        Schema::create('schedule_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedule_id')->constrained()->onDelete('cascade'); // Links to the specific schedule type
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('set null'); // Optional service selection
            $table->foreignId('staff_id')->nullable()->constrained('users')->onDelete('set null'); // Staff member assigned to this booking
            $table->string('client_name'); // Client's name
            $table->string('client_email'); // Client's email
            $table->string('client_phone')->nullable(); // Optional client phone number
            $table->timestamp('scheduled_at'); // Date and time of the scheduled booking
            $table->string('status')->default('pending'); // e.g., pending, confirmed, cancelled
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_bookings');
    }
};
