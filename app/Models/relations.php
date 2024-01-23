<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relations extends Model
{
    protected $table = 'relations';
    protected $fillable = [
        'produk_nomor_payment',
        'pesanan_id_buy',
        'pembayaran_nomor_barang',
        'status',

    ];
}
