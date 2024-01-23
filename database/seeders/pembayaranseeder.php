<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class pembayaranseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembayarans')->insert([
            'nomor_payment' => "123456",
            'jenis' => 'credit',
            'harga_total' => 'Rp.150.000,00',
            'jumlah_barang' => '8',
        ]);

    }
}
