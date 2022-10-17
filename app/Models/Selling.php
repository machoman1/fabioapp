<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount_selling',
        'amount_to_pay',
        'crypto_type',
        'crypto_address',
        'total_amount_to_pay',
        'momo_account_name',
        'momo_account_number',
        'bank_account_name',
        'bank_account_number',
        'bank_branch',
        'bank_name',
        'status',
        ];
}
