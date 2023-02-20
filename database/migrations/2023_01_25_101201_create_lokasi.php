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
        Schema::create('lokasi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            // $table->collation = 'utf8mb4_general_ci';
            $table->integer('id_lokasi',true);
            $table->string('nama_lokasi');
            $table->char('kode_ruangan');
            $table->text('ket');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasi');
    }
};
