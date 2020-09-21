<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $fillable = ['commodity_name', 'purchase_price', 'weight', 'balance', 'thickness', 'width', 'warehouse_id'];

    public function warehouses()
    {
         return $this->hasOne('App\Warehouses', 'id', 'warehouses_id');
    }
    public function manufacturer()
    {
        return $this->hasOne('App\Contragents', 'id', 'manufacturer_id');
    }
    public function commodity_owner()
    {
        return $this->hasOne('App\Contragents', 'id', 'owner_id');
    }
    public function products(){
        return $this->belongsToMany('App\OrdersProducts','orders_commodities', 'commodities_id', 'product_id'); //
    }
}
