<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barang_masuk', function (Blueprint $table) {
            $table->string('kode_barang')->nullable();
            $table->string('satuan')->nullable();
            $table->string('kategori_barang', 50)->nullable();
            $table->integer('harga_beli')->nullable();
            $table->string('merk')->nullable();
            $table->string('warna')->nullable();
            $table->string('ket_barang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
