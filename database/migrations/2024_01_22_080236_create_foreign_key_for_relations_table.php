<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('relations', function (Blueprint $table) {
            $table->foreign('produk_nomor_barang')->references('nomor_barang')->
            on('produks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pesanan_id_buy')->references('id_buy')->
            on('pesanans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pembayaran_nomor_payment')->references('nomor_payment')->
            on('pembayarans')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('relations', function (Blueprint $table) {
    
            $table->dropForeign('relations_produk_nomor_barang_foreign');
            $table->dropForeign('relations_pesanan_id_buy_foreign');
            $table->dropForeign('relations_pembayaran_nomor_payment_foreign');
    
    
    });
    }
    };
