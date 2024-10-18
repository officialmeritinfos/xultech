<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSubmission extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Relationship: JobSubmission belongs to a Career.
     */
    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
