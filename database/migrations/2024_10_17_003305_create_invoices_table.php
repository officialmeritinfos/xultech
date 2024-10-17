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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // References the client
            $table->foreignId('booking_id')->nullable()->constrained('bookings')->onDelete('set null'); // References the booking, if applicable
            $table->foreignId('project_id')->nullable()->constrained('projects')->onDelete('set null'); // References the project, if applicable
            $table->string('total_amount', 100); // Total amount for the invoice
            $table->string('currency', 3)->default('USD'); // Currency for the invoice
            $table->string('amount_paid', 100)->default(0); // Amount paid by the client
            $table->string('status')->default('unpaid'); // e.g., unpaid, paid, partially paid
            $table->date('due_date'); // Due date for payment
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
