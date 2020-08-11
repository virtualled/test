<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouses extends Model
{
    public  function commodities()
    {
        return $this->hasMany(Commodity::class);
    }
}

