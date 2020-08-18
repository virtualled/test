<?php

namespace App\Http\Resources;

use App\Http\Resources\Orders\OrdersProductsResource;
use App\OrdersProducts;
use Illuminate\Http\Resources\Json\JsonResource;


class OrdersResources extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $defaultData =  parent::toArray($request);

        $additionalData = [
            'order_status_id' => $this->status_approve,
            'order_payment_id' => $this->status_approve,
            'order_client_id' => $this->client,
            'products' => OrdersProductsResource::collection(OrdersProducts::all()),
            //Add manager
        ];
        return  array_merge($defaultData, $additionalData);
    }
}
