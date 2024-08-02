<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'transaction_id',
        'product',
        'qty',
        'price',
        'created_at',
        'updated_at'
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaction_id', 'id');
    }
}
