<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'id',
        'nama',
        'tanggal',
        'created_at',
        'updated_at'
    ];

    public function transaksiItems()
    {
        return $this->hasMany(TransaksiItem::class, 'transaction_id', 'id');
    }
}
