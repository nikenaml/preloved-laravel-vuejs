<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductGalleriesResource extends JsonResource
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
            'products_id' => $this->products_id,
            'name' => $this->name,
            'photo' => $this->photo,
            'is_default' => $this->is_default,
            
        ];
    }
}
