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
}
