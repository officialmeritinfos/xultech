<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subsidiary extends Model
{
    protected $guarded = [];

    /**
     * Check if the subsidiary was acquired.
     */
    public function isAcquired()
    {
        return $this->ownership_type === 'acquired';
    }

    /**
     * Retrieve formatted contact details.
     */
    public function contactDetails()
    {
        return "{$this->contact_email} / {$this->contact_phone}";
    }

    /**
     * Calculate the subsidiary's age since establishment.
     */
    public function age()
    {
        return $this->established_date ? $this->established_date->diffInYears(now()) : 'N/A';
    }
}
