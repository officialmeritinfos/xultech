<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $guarded = [];

    /**
     * Check if the product is available for purchase.
     */
    public function isAvailable()
    {
        return $this->is_available;
    }

    /**
     * Format the technologies used as a comma-separated list.
     */
    public function formattedTechnologies()
    {
        return collect($this->technologies)->implode(', ');
    }

    /**
     * Check if the product is featured.
     */
    public function isFeatured()
    {
        return $this->is_featured;
    }
}
