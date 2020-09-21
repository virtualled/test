<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristics extends Model
{
     protected $fillable = [
         'characteristic_value',
         'characteristic_name'
     ];
}
