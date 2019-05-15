<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsConfig extends Model
{
    protected $fillable = [
        'username', 'password', 'masking_name', 'quantity'
    ];
}
