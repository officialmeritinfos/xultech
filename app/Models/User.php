<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

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

    public function hasTwoFactorEnabled()
    {
        //retrieve if the user's two-factor authentication is on
        return $this->two_factor;
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
    protected function twoFactorSecret(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => decrypt($value),  // Decrypt the secret when retrieving
            set: fn ($value) => encrypt($value)   // Encrypt the secret when setting
        );
    }

    /**
     * Mutator for the two_factor attribute.
     * When two-factor is enabled, a recovery code will be generated.
     */
    public function setTwoFactorAttribute($value)
    {
        // Set the two_factor value (true or false)
        $this->attributes['two_factor'] = $value;

        // Only generate recovery code if two_factor is set to true
        if ($value) {
            // Instantiate the Faker library to generate random words
            $faker = Faker::create();
            // Generate a recovery code consisting of 10 random words using Faker
            $recoveryCode = collect(range(1, 10))->map(function () use ($faker) {
                return $faker->unique()->word;  // Generate unique random words using Faker
            })->implode(' ');  // Join the words with spaces
            // Hash the recovery code before saving to the database
            $this->attributes['two_factor_recovery_codes'] = encrypt($recoveryCode);
        }
    }
    /**
     * Method to retrieve the plain recovery code for displaying once after generation.
     */
    public function getPlainRecoveryCodeAttribute()
    {
        return $this->attributes['plain_recovery_code'] ?? null;
    }
    /**
     * Relationship: A user has many activities.
     */
    public function activities()
    {
        return $this->hasMany(UserActivity::class);
    }
    /**
     * Relationship: A user has many activities with status == false.
     */
    public function inactiveActivities()
    {
        return $this->hasMany(UserActivity::class)->where('status', false);
    }
    /**
     * Relationship: A user has many activities where status == false and limited to a certain number.
     *
     * @param int $limit The number of activities to retrieve.
     */
    public function limitedInactiveActivities($limit = 6)
    {
        return $this->hasMany(UserActivity::class)
            ->where('status', false)
            ->orderBy('created_at', 'desc')
            ->limit($limit);
    }
}
