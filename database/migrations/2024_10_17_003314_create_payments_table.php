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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade'); // References the associated invoice
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // References the client
            $table->string('amount', 100); // Payment amount
            $table->string('currency', 3)->default('USD'); // Currency for the payment
            $table->string('payment_method'); // e.g., credit card, bank transfer, etc.
            $table->timestamp('payment_date')->useCurrent(); // Date of the payment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
