<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientProject extends Model
{
    protected $guarded = [];

    /**
     * Defines the relationship with the User model for the client.
     */
    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Defines the relationship with the User model for the assigned staff member.
     */
    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }

    /**
     * Defines the relationship with the Booking model.
     * A client project may be created from a booking.
     */
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    /**
     * Defines the relationship with the ClientProjectUpdate model.
     * A client project can have many updates.
     */
    public function updates()
    {
        return $this->hasMany(ClientProjectUpdate::class, 'client_project_id');
    }

}
