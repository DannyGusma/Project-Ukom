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
        Schema::create('pengajuan_bb', function (Blueprint $table) {
            $table->string('nama_barang')->primary();
            $table->integer('harga_satuan');
            $table->integer('jumlah_barang');
            $table->bigInteger('total_harga');
            $table->date('tanggal_pengajuan');
            $table->enum('status_approval', ['setuju ', 'tidak', 'pending'])->default('pending')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_bb');
    }
};
