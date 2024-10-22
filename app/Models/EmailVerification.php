<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailVerification extends Model
{
    protected $guarded=[];

    /**
     * Define a relationship with the User model.
     *
     * Each email verification is associated with a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
