<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = [];

    public function creator()
    {
        // References the user (staff) who created the schedule
        return $this->belongsTo(User::class, 'created_by');
    }

    public function scheduleBookings()
    {
        // Retrieves all bookings linked to this schedule type
        return $this->hasMany(ScheduleBooking::class);
    }

    /**
     * Scope to filter schedules based on department.
     */
    public function scopeForDepartment($query, $department)
    {
        return $query->where('department', $department)->orWhereNull('department');
    }

    /**
     * Scope to filter schedules based on role.
     */
    public function scopeForRole($query, $role)
    {
        return $query->where('role', $role)->orWhereNull('role');
    }
}
