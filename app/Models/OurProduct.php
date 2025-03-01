<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurProduct extends Model
{
    protected $guarded = [];

    protected $casts = [
        'media_files' => 'array', // Cast media_files to an array
    ];

    /**
     * Check if the product is active.
     */
    public function isActive()
    {
        return $this->status === 'active';
    }
}
