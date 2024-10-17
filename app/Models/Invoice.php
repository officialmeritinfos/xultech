<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = [];

    public function user()
    {
        // Defines a relationship between an invoice and a user
        return $this->belongsTo(User::class);
    }

    public function payments()
    {
        // Defines a one-to-many relationship with payments
        return $this->hasMany(Payment::class);
    }

}
