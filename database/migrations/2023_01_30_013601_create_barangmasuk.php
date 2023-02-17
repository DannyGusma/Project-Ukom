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
        Schema::create('barangmasuk', function (Blueprint $table) {
            // $table->id();x
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->integer('id_masuk',true);
            $table->string('nama_barang');
            $table->integer('total_barang');
            $table->char('kode_barang',7);
            $table->char('id_supplier',6);
            $table->date('tanggal_masuk'); 

            // Foreign key untuk id_pengguna
            $table->foreign('id_supplier')->references('id_supplier')->on('supplier')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangmasuk');
    }
};
