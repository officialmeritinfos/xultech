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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->enum('role', ['superadmin', 'admin', 'user', 'editor','reader','staff'])->default('reader');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_admin')->default(false);
            $table->timestamp('last_login_at')->nullable();
            $table->ipAddress('last_login_ip')->nullable();
            $table->string('two_factor_secret')->nullable();
            $table->boolean('two_factor')->default(false);
            $table->string('two_factor_recovery_codes')->nullable();
            $table->timestamp('password_changed_at')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->text('bio')->nullable();
            $table->string('language', 10)->default('en');
            $table->string('timezone')->default('UTC');
            $table->boolean('dark_mode')->default(false);
            $table->boolean('email_notifications')->default(true);
            $table->boolean('sms_notifications')->default(false);
            $table->string('github_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('alternate_email')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('subscription_plan')->nullable();
            $table->timestamp('subscription_expires_at')->nullable();
            $table->string('balance', 82)->default(0);
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('industry')->nullable();
            $table->uuid('uuid')->unique();
            $table->string('department')->nullable(); // Department the user belongs to, e.g., 'Sales', 'Support'
            $table->string('position')->nullable(); // Position within the department, e.g., 'Manager', 'Assistant'
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
