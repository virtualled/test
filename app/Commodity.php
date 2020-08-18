<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $fillable = ['commodity_name', 'purchase_price', 'weight', 'balance', 'thickness', 'width', 'warehouse_id'];

    public function warehouses()
    {
         return $this->hasOne('App\Warehouses', 'id', 'warehouse_id');
    }

    public function char_thick()
    {
        return $this->hasOne('App\Characteristics', 'id', 'thickness');
    }

    public function char_width()
    {
        return $this->hasOne('App\Characteristics', 'id', 'width');
    }
}
