<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    /**
     * Relationship with MenuItem model.
     * A menu can have multiple menu items.
     */
    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }
}
