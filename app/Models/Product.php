<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category',
        'type_kamar',
        'ac',
        'kamar_mandi',
        'kamar_tidur',
        'furniture',
        'harga',
        'stock',
        'foto',
    ];
}
