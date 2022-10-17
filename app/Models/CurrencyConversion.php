<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyConversion extends Model
{
    use HasFactory;
    protected $fillable = [
        'dollars',
        'bitcoin',
        'etherom',
        'litecoin',
        'bitcoinCash',
        'fee',
    ];
}
