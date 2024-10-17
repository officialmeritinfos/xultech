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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();

            // Basic Company Information
            $table->string('name'); // Company or platform name
            $table->text('description')->nullable(); // Meta description for SEO
            $table->text('keywords')->nullable(); // Meta keywords for SEO
            $table->string('logo_path')->nullable(); // Path to the logo image
            $table->string('favicon_path')->nullable(); // Path to the favicon image
            $table->string('contact_email')->nullable(); // Contact email address
            $table->string('contact_phone')->nullable(); // Contact phone number
            $table->string('address')->nullable(); // Company physical address

            // Social Media Links
            $table->string('facebook_url')->nullable(); // Facebook profile link
            $table->string('twitter_url')->nullable(); // Twitter profile link
            $table->string('linkedin_url')->nullable(); // LinkedIn profile link
            $table->string('instagram_url')->nullable(); // Instagram profile link

            // SEO and Web Content
            $table->string('meta_title')->nullable(); // Title for SEO
            $table->text('footer_text')->nullable(); // Footer text
            $table->text('terms_conditions')->nullable(); // Terms & Conditions
            $table->text('privacy_policy')->nullable(); // Privacy Policy

            // Authentication and Security Settings
            $table->boolean('email_verification')->default(true); // Whether email verification is required
            $table->boolean('two_factor_authentication')->default(false); // Enable or disable 2FA
            $table->string('two_factor_provider')->nullable(); // e.g., 'google_authenticator', 'authy'
            $table->integer('two_factor_timeout')->default(5); // Timeout in minutes for 2FA

            // Notification Settings
            $table->string('notification_email')->nullable(); // Email used for sending notifications
            $table->string('notification_phone')->nullable(); // Phone number for SMS notifications
            $table->boolean('enable_email_notifications')->default(true); // Toggle email notifications on/off
            $table->boolean('enable_sms_notifications')->default(false); // Toggle SMS notifications on/off

            // Payment and Billing Settings
            $table->string('currency')->default('USD'); // Default currency for transactions
            $table->string('tax_rate', 50)->default(0.00); // Tax rate in percentage
            $table->boolean('enable_invoice_auto_send')->default(true); // Automatically send invoices
            $table->boolean('enable_recurring_payments')->default(false); // Allow recurring payments

            // Maintenance and Operation Settings
            $table->boolean('maintenance_mode')->default(false); // Enable or disable site maintenance mode
            $table->text('maintenance_message')->nullable(); // Message shown when the site is in maintenance mode
            $table->string('default_language')->default('en'); // Default language for the platform
            $table->boolean('enable_registration')->default(true); // Whether new user registration is enabled

            // Email and SMTP Settings
            $table->string('smtp_host')->nullable(); // SMTP host
            $table->string('smtp_port')->nullable(); // SMTP port
            $table->string('smtp_username')->nullable(); // SMTP username
            $table->string('smtp_password')->nullable(); // SMTP password
            $table->string('smtp_encryption')->nullable(); // SMTP encryption (e.g., 'tls', 'ssl')

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
