<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SohHistory extends Model
{
    protected $fillable = [
        'id',
        'product_id',
        'notes',
        'quantity',
        'total',
        'created_at',
        'updated_at',
    ];
}
