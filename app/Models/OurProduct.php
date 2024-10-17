<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurProduct extends Model
{
    protected $guarded = [];

    /**
     * Check if the product is active.
     */
    public function isActive()
    {
        return $this->status === 'active';
    }

    /**
     * Get a formatted list of product features.
     */
    public function formattedFeatures()
    {
        return collect($this->features)->implode(', ');
    }

    /**
     * Check if the product has a perpetual license.
     */
    public function isPerpetualLicense()
    {
        return $this->license_type === 'perpetual';
    }
}
