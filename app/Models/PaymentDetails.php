<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    use HasFactory;
    protected $fillable = [
    'momo_account_name',
    'momo_account_number',
    'bank_account_name',
    'bank_name',
    'bank_branch',
    'bank_account_number',
    ];
}
