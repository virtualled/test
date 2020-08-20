<?php

namespace App\Http\Resources\Orders;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdersShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
            'products' => $this->products,
            //Add manager
        ];
        return  array_merge($defaultData, $additionalData);
    }
}
