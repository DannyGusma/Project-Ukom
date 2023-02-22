<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengajuanBBController extends Controller
{
    public function index(){
        $data = DB::table('pengajuan_bb')->get();

        return view('pengajuan.barangbaru.index', compact('data'));
    }
    public function tambah(){

        return view('pengajuan.barangbaru.tambah');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'nama_barang' => 'unique:pengajuan_bb,nama_barang',
            ],
            [
                'nama_barang.unique' => 'Nama tersebut sudah digunakan!',
            ]
        );
        try {
            $total_harga = $request->input('harga_satuan') * $request->input('jumlah_barang');
            $tambah_pengajuan_bb = DB::table('pengajuan_bb')->insert([
                'nama_barang' => $request->input('nama_barang'),
                'harga_satuan' => $request->input('harga_satuan'),
                'jumlah_barang' => $request->input('jumlah_barang'),
                'total_harga' => $total_harga,
                'tanggal_pengajuan' => NOW(),

            ]);
            if ($tambah_pengajuan_bb) {
                return redirect('pengajuan/barangbaru');
            } else
                return "input data gagal";
        } catch (\Exception $e) {
            return  $e->getMessage();
        }
    }
}
