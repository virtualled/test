<?php

namespace App\Http\Resources\Contragents;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ContragetnsIndexResourse extends JsonResource
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
            'contragent_type_id' => $this->type->type_name,
            'contragent_contacts_id' => $this->contacts,
            'contragent_requisite_id' => $this->requisites
        ];

        return array_merge($defaultData, $additionalData);

//       return  parent::toArray($request);

    }

}
