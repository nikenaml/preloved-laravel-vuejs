<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'type' => $this->type,
            'description' => $this->description,
            'price' => number_format($this->price / 100, 2),
            'categories_id' => $this->categories_id,
            'genders_id' => $this->genders_id
        ];
    }
}
