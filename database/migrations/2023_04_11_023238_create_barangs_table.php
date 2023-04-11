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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang', 10)->unique();
            $table->string('nama_barang', 200)->nullable();
            $table->string('satuan', 10)->nullable();
            $table->string('kategori_barang', 100)->nullable();
            $table->string('harga_beli', 100)->nullable();
            $table->string('merk', 50)->nullable();
            $table->string('warna', 20)->nullable();
            $table->text('ket_barang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
};
