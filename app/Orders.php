<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'order_name',
        'order_date',
        'order_status_id',
        'order_payment_id',
        'order_sum',
        'order_shipment_date',
        'order_client_id',
        'order_manager_id',
    ];

    public function status_approve()
    {
        return $this->hasOne('App\OrdersStatuses', 'id', 'order_status_id');
    }

    public function status_payment()
    {
        return $this->hasOne('App\OrdersStatuses', 'id', 'order_payment_id');
    }

    public function client()
    {
        return $this->hasOne('App\Contragents', 'id', 'order_client_id');
    }

    public function products()
    {
        return $this->hasMany('App\OrdersProducts', 'product_order_id', 'id');
    }
    //Add manager
}
