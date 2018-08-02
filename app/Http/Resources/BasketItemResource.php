<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BasketItemResource extends JsonResource
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
            'transaction_id'=> $this->transaction_id,
            'quantity'=> $this->quantity,
            'product_price'=> $this->product_price,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
          ];
    }
}
