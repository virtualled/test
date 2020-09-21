<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $fillable = [
        'order_id',
        'commodity_id',
        'balance_start',
        'product_ton',
        'product_quantity',
        'production_date',
    ];
}
