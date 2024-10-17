<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleBooking extends Model
{
    protected $guarded = [];

    public function schedule()
    {
        // References the specific schedule type for this booking
        return $this->belongsTo(Schedule::class);
    }

    public function service()
    {
        // References the service, if selected by the client
        return $this->belongsTo(Service::class);
    }

    public function staff()
    {
        // References the staff member assigned to handle the booking
        return $this->belongsTo(User::class, 'staff_id');
    }
}
