<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class PasswordResetToken extends Model
{
    protected $guarded = [];

    protected function token()
    {
        Attribute::make(
            set: fn($value)=>bcrypt($value)
        );
    }
}
