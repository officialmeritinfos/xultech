<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    public function invoice()
    {
        // Defines a relationship between a payment and an invoice
        return $this->belongsTo(Invoice::class);
    }

}
