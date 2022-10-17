<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellingDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'bitcoin_address',
        'bitcoin_cash_address',
        'litecoin_address',
        'etheruem_address',
        ];
}
