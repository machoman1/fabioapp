<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buying extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'crypto_type',
        'amount_needed',
        'amount_paying',
        'crypto_address',
        'new_total',
        'status',
    ];
}
