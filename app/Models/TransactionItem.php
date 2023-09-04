<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'products_id',
        'transaction_id',
        'quantity'
    ];

    public function product()
    {
        return $this->hasOne(Products::class, 'id', 'products_id');
    }
}
