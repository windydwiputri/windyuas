<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class relationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'produk_nomor_barang' => "1234",
            'pesanan_id_buy' => "738947",
            'pembayaran_nomor_payment' => "123456",
            'status' => "Y",
        ]);
    }
}
