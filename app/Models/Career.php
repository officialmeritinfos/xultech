<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    // Define the table name if not using 'careers'
    protected $table = 'careers';

    // Allow mass assignment for all columns
    protected $guarded = [];

    // Example of a method to return active job posts
    public static function activeJobs()
    {
        return self::where('is_active', true)->get();
    }

    // Example method for featured jobs
    public static function featuredJobs()
    {
        return self::where('is_featured', true)->get();
    }
    /**
     * Relationship: Career has many JobSubmissions.
     */
    public function jobSubmissions()
    {
        return $this->hasMany(JobSubmission::class);
    }
}
