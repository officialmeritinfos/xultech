<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function user()
    {
        // Defines the relationship between a booking and a client
        return $this->belongsTo(User::class, 'user_id');
    }

    public function service()
    {
        // Defines the relationship between a booking and the service being booked
        return $this->belongsTo(Service::class);
    }

    public function project()
    {
        // Defines a one-to-one relationship between a booking and a project it may spawn
        return $this->hasOne(ClientProject::class);
    }

    public function staff()
    {
        // Defines the relationship between a booking and the staff member assigned to it
        return $this->belongsTo(User::class, 'staff_id');
    }


}
