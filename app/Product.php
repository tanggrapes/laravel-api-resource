<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'expiry_date',
        'cost',
        'price',
        'category_id',
        'created_at',
        'updated_at'
    ];
}
