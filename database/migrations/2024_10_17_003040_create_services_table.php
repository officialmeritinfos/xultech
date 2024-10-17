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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2); // Base price of the service
            $table->string('currency', 3)->default('USD'); // Currency code for the price, default is USD
            $table->integer('duration_minutes'); // Duration of the service in minutes
            $table->boolean('requires_confirmation')->default(true); // Whether the booking requires staff confirmation
            $table->boolean('is_active')->default(true); // Whether the service is available for booking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
