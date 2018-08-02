<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SohHistoryResource extends JsonResource
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
            'product_id'=> $this->product_id,
            'notes'=> $this->notes,
            'quantity'=> $this->quantity,
            'total'=> $this->total,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
          ];
    }
}
