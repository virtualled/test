<?php

namespace App\Http\Resources\Contragents;

use Illuminate\Http\Resources\Json\JsonResource;

class ContragentsTypesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
