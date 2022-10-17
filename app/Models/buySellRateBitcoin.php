<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buySellRateBitcoin extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_logo',
        'name',
        'abbreviation',
        'buying',
        'selling',
        'status'
    ];
}
