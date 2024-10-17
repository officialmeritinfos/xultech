<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientProjectUpdate extends Model
{
    protected $guarded = [];

    /**
     * Defines the relationship with the ClientProject model.
     * Each update is associated with one specific client project.
     */
    public function clientProject()
    {
        return $this->belongsTo(ClientProject::class, 'client_project_id');
    }

    /**
     * Defines the relationship with the User model for the staff member.
     * Each update is created by one staff member.
     */
    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }

}
