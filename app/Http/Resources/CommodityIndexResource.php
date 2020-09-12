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
            'purchase_sum' => $this->purchase_sum,
            'weight' => $this->weight,
            'balance' => $this->balance,
            'thickness' => $this->char_thick->characteristic_value,
            'width' => $this->char_width->characteristic_value,
            'supply_date' => $this->supply_date,
            'manufacturer_id' => $this->manufacturer->contragent_name,
            'owner_id' => $this->commodity_owner->contragent_name,
            'warehouse_id'=> $this->warehouses->warehouse_name,
            'created_at' => $this->created_at,
        ];
    }
}
