<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $guarded = [];

    /**
     * Relationship with the Menu model.
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * Relationship with the Page model.
     * A menu item may link to a specific page.
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    /**
     * Self-referencing relationship to get child items.
     * This allows nested menu items (e.g., dropdowns).
     */
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }

    /**
     * Self-referencing relationship to get the parent item.
     */
    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }
}
