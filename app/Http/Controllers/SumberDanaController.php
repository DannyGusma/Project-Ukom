<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SumberDanaController extends Controller
{
    public function index (Request $request){
        $data = DB::table('sumber_dana')->get();
        return view('sumberdana.index', compact('data'));
    }
    public function tambah (){
        return view('sumberdana.tambah');
    }
    public function store(Request $request, $id=null){
        try {
 

            $tambahsumber_dana = DB::table('sumber_dana')->insert([  
                'sumber_dana' => $request->input('sumber_dana'),
                // 'ket' => $request->input('ket')
                ]);
                if($tambahsumber_dana){
                    
                    return view('sumberdana.tambah');
                }else
                return "input data gagal";
            } catch (\exception $e) {
                return $e->getMessage();
            }
    }
    private function getSumber_dana($id)
    {
        return collect(DB::select('SELECT * FROM sumber_dana Where id_sumber = ?', [$id]))->fristOrFail();
    }
    public function edit($id = null) {
        $edit = $this->getSumber_dana($id);
        return view ('sumberdana.edit', compact('edit'));
    }

    public function update(Request $request){
        try {
            $data = [
                'id_sumber' => $request->input('id_sumber'),
                'nama_sumber' => $request->input('nama_sumber')
            ];
            DB::table('sumber_dana')->where('id_sumber', '=', $request->input('id_sumber'))->update($data);
            return redirect('sumber_dana');
        } catch (\Exception $e) {
            dd('gagal');
            return $e->getMessage();
        }

    }
    public function hapus($id = null)
    {
        try {
            $hapus = DB::table('sumber_dana')->where('id_sumber', $id)->delete();
            if ($hapus) {
                return redirect();
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
