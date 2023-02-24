<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // VIEW UNTUK HALAMAN PENGGUNA
        DB::unprepared(
            "CREATE OR REPLACE VIEW pengguna_admin_kepsek AS (
             SELECT pengguna.*, level_user.nama_level, admin.nama as admin, kepsek  as kepsek
                FROM pengguna
                LEFT JOIN level_user
                ON pengguna.id_level = level_user.id_level
                LEFT JOIN admin
                ON pengguna.id_pengguna = admin.id_pengguna
                LEFT JOIN kepsek
                ON pengguna.id_pengguna = kepsek.id_pengguna
                ORDER BY level_user.id_level
            )"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_pengguna_admin_kepsek');
    }
};
