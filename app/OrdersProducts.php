<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersProducts extends Model
{
    public function details(){
        return $this->hasMany('App\OrdersProductsDetails', 'product_id', 'id');
    }
}
