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
        Schema::create('subsidiaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('website')->nullable(); // Subsidiary website
            $table->enum('ownership_type', ['built', 'acquired'])->default('built');
            $table->date('acquisition_date')->nullable(); // Date of acquisition if applicable
            $table->unsignedInteger('ownership_percentage')->default(100); // Ownership percentage
            $table->string('country')->nullable();
            $table->string('industry')->nullable(); // Industry in which the subsidiary operates
            $table->string('contact_email')->nullable(); // Primary contact email
            $table->string('contact_phone')->nullable(); // Primary contact phone number
            $table->date('established_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsidiaries');
    }
};
