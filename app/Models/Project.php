<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    /**
     * Get the duration of the project.
     */
    public function duration()
    {
        if ($this->start_date && $this->end_date) {
            return $this->start_date->diffInDays($this->end_date) . ' days';
        }
        return 'Ongoing';
    }

    /**
     * Format technologies used as a comma-separated list.
     */
    public function formattedTechnologies()
    {
        return collect($this->technologies_used)->implode(', ');
    }

    /**
     * Check if the project is currently ongoing.
     */
    public function isOngoing()
    {
        return !$this->end_date || $this->end_date->isFuture();
    }
}
