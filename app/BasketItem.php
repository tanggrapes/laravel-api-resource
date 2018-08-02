<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    protected $fillable = [
        'id',
        'product_id',
        'transaction_id',
        'quantity',
        'product_price',
        'created_at',
        'updated_at'
    ];
}
