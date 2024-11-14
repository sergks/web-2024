<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'active'
    ];

    protected $casts = [
        'price' => 'double',
        'active' => 'bool'
    ];
}
