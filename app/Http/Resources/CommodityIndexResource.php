<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommodityIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'commodity_name' => $this->commodity_name,
            'purchase_price' => $this->purchase_price,
            'weight' => $this->weight,
            'balance' => $this->balance,
            'warehouse_id'=> $this->warehouse_id->warehouses->warehouse_name,
            'created_at' => $this->created_at,
        ];
    }
}
