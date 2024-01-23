<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = 'pembayarans';
    protected $fillable = [
        'nomor_payment',
        'jenis',
        'harga_total',
        'jumlah_barang',

    ];
}
