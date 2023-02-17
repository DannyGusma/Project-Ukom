<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $supplier = collect([
        //     [
        //         'id_supplier' => 'SPR001',
        //         'nama_supplier' => 'PT Laptop Bersama',
        //         'alamat_supplier' => 'Bekasi',
        //         'telepon_supplier' => '0867',

        //     ],
        //     [
        //         'id_supplier' => 'SPR002',
        //         'nama_supplier' => 'PT Meja Bersama',
        //         'alamat_supplier' => 'Bekasi',
        //         'telepon_supplier' => '0868',

        //     ],
        //     [
        //         'id_supplier' => 'SPR003',
        //         'nama_supplier' => 'PT Mouse Bersama',
        //         'alamat_supplier' => 'Bekasi',
        //         'telepon_supplier' => '0867',

        //     ],

        // ]);
        $supplier->each(fn ($s) => DB::table('supplier')->insert($s));
    }
}
