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
        Schema::create('client_project_updates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->onDelete('cascade'); // References the specific client project
            $table->foreignId('staff_id')->constrained('users')->onDelete('cascade'); // Staff member making the update
            $table->text('update_text'); // Description of the update
            $table->timestamp('created_at')->useCurrent(); // Timestamp of the update
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_project_updates');
    }
};
