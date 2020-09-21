<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContragentsContacts extends Model
{
    protected $fillable = [
        'phone',
        'mail',
        'web',
        'address',
    ];
}
