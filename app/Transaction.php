<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id',
        'transaction_date',
        'total',
        'subtotal',
        'discount_amount',
        'discount_percentage',
        'amount_tendered',
        'change',
        'created_at',
        'updated_at'
    ];
}
