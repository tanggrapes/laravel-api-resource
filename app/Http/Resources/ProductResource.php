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
            'id' => $this->id,
            'name'=> $this->name,
            'description'=> $this->description,
            'expiry_date'=> $this->expiry_date,
            'cost'=> $this->cost,
            'price'=> $this->price,
            'category_id'=> $this->category_id,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
          ];
    }
}
