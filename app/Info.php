<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'title', 'moto', 'fb', 'yt', 'ln', 'phone', 'email', 'logo', 'address', 'map', 'gp'
    ];
}
