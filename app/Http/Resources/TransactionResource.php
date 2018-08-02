<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'transaction_date'=> $this->transaction_date,
            'total'=> $this->total,
            'subtotal'=> $this->subtotal,
            'discount_amount'=> $this->discount_amount,
            'discount_percentage'=> $this->discount_percentage,
            'amount_tendered'=> $this->amount_tendered,
            'change'=> $this->change,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
          ];
    }
}
