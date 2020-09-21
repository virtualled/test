<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommodityShowResource extends JsonResource
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
            'purchase_sum' => $this->purchase_sum,
            'weight' => $this->weight,
            'balance' => $this->balance,
            'thickness' => $this->char_thick->id,
            'width' => $this->char_width->id,
            'supply_date' => $this->supply_date,
            'manufacturer_id' => $this->manufacturer_id,
            'owner_id' => $this->owner_id,
            'warehouse_id'=> $this->warehouses->id,
            'created_at' => $this->created_at,
        ];
    }
}
