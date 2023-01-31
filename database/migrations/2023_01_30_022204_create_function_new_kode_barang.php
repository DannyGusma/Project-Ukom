<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::unprepared("DROP FUNCTION IF EXISTS newkodebarang");
        DB::unprepared(
            "CREATE FUNCTION newkodebarang()
                RETURNS CHAR(7)
                BEGIN
                DECLARE kode_lama CHAR(7);
                DECLARE kode_baru CHAR(7);
                DECLARE ambil_angka INT;
                DECLARE angka_baru CHAR(4);
                DECLARE jumlah INT;

                SELECT COUNT(kode_barang) INTO jumlah FROM barangmasuk;

                IF(jumlah = 0) THEN
                    SET kode_baru = CONCAT('BRG', 0,0,0,1);
                ELSE
                    SELECT MAX(kode_barang) INTO kode_lama FROM barangmasuk;
                    SET ambil_angka = SUBSTR(kode_lama, 5, 3) + 1;
                    SET angka_baru = LPAD(ambil_angka,4, 0);
                    SET kode_lama = SUBSTR(kode_lama, 1, 3);
                    SET kode_baru = CONCAT(kode_lama, angka_baru);
                END IF;
                RETURN kode_baru;


            END;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('function_new_kode_barang');
    }
};
