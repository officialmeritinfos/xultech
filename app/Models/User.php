<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Automatically generate a UUID for new users
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid()->toString();
        });
    }

    /**
     * Check if the user is an admin.
     */
    public function isAdmin()
    {
        return $this->is_admin;
    }

    /**
     * Get the user’s full address.
     */
    public function fullAddress()
    {
        return "{$this->contact_address}, {$this->city}, {$this->state}, {$this->country}";
    }

    /**
     * Check if the user is on a free trial.
     */
    public function onTrial()
    {
        return $this->trial_ends_at && now()->lessThan($this->trial_ends_at);
    }

    /**
     * Check if the user has two-factor authentication enabled.
     */
    public function hasTwoFactorAuth()
    {
        return !is_null($this->two_factor_secret);
    }

    /**
     * Retrieve the user's subscription status.
     */
    public function subscriptionStatus()
    {
        if ($this->subscription_expires_at && now()->greaterThan($this->subscription_expires_at)) {
            return 'expired';
        }

        return $this->subscription_plan ? 'active' : 'none';
    }

    /**
     * Toggle the user's dark mode preference.
     */
    public function toggleDarkMode()
    {
        $this->dark_mode = !$this->dark_mode;
        $this->save();
    }

    /**
     * Send a notification based on user preferences.
     */
    public function notifyUser($message)
    {
        if ($this->email_notifications) {
            // logic to send an email notification
        }

        if ($this->sms_notifications) {
            // logic to send an SMS notification
        }
    }

    /**
     * Check if the user has an active subscription.
     */
    public function hasActiveSubscription()
    {
        return $this->subscription_expires_at && now()->lessThanOrEqualTo($this->subscription_expires_at);
    }

    /**
     * Update the user's last login timestamp and IP address.
     */
    public function updateLastLogin($ipAddress)
    {
        $this->update([
            'last_login_at' => now(),
            'last_login_ip' => $ipAddress,
        ]);
    }

    /**
     * Retrieve the user's social login status.
     */
    public function hasSocialLogin()
    {
        return !is_null($this->google_id) || !is_null($this->github_id);
    }

    /**
     * Check the user's role.
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Add a balance to the user's account.
     */
    public function addBalance($amount)
    {
        $this->balance += $amount;
        $this->save();
    }

    /**
     * Deduct a balance from the user's account.
     */
    public function deductBalance($amount)
    {
        $this->balance -= $amount;
        $this->save();
    }
    public function isSuperAdmin()
    {
        // Check if the user's role is superadmin
        return $this->role === 'superadmin';
    }

    public function isEditor()
    {
        // Check if the user's role is editor
        return $this->role === 'editor';
    }

    public function isReader()
    {
        // Check if the user's role is reader
        return $this->role === 'reader';
    }

    public function posts()
    {
        // Define the relationship: a user has many posts
        return $this->hasMany(Post::class);
    }
    public function schedules()
    {
        // Staff-created schedules
        return $this->hasMany(Schedule::class, 'created_by');
    }

    public function scheduleBookings()
    {
        // Staff-assigned bookings
        return $this->hasMany(ScheduleBooking::class, 'staff_id');
    }
    public function bookings()
    {
        // Defines a one-to-many relationship with bookings
        return $this->hasMany(Booking::class);
    }

    public function invoices()
    {
        // Defines a one-to-many relationship with invoices
        return $this->hasMany(Invoice::class);
    }

    public function projects()
    {
        // Defines a one-to-many relationship with projects
        return $this->hasMany(Project::class);
    }
}
