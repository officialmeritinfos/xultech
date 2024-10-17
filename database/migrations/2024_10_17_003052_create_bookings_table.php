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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Client making the booking
            $table->foreignId('service_id')->constrained()->onDelete('cascade'); // The service being booked
            $table->foreignId('staff_id')->nullable()->constrained('users')->onDelete('set null'); // Staff assigned to the booking
            $table->string('status')->default('pending'); // Status: pending, confirmed, cancelled, completed
            $table->timestamp('booking_date'); // Date and time of the booking
            $table->timestamp('confirmed_at')->nullable(); // Timestamp for when the booking is confirmed
            $table->text('client_notes')->nullable(); // Client's notes for the booking
            $table->text('staff_notes')->nullable(); // Staff notes regarding the booking
            $table->timestamp('cancelled_at')->nullable(); // Timestamp for cancellations
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
