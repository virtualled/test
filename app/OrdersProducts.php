<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersProducts extends Model
{
    protected $fillable = [
        'product_name',
        'product_quantity',
        'product_unit_id',
        'product_price',
        'product_sum',
        'product_name',
    ];

    public function details(){
        return $this->hasMany('App\OrdersProductsDetails', 'product_id', 'id');
    }
}
