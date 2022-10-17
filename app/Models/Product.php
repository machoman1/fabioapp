<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_logo',
        'name',
        'abbreviation',
        'chart',
        'price',
        'change_arrow',
        'change_value',
        'status',
    ];
}
