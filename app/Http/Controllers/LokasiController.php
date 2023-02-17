<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class LokasiController extends Controller
{
    public function index(){
        $data = DB::table('lokasi')->get();
        return view('lokasi.index', compact('data'));
    }
    public function formtambah(){
        return view('lokasi.tambah');
    }
    public function store(Request $request, $id=null){
       

        
        try {
 

        $tambahlokasi = DB::table('lokasi')->insert([  
            'nama_lokasi' => $request->input('nama_lokasi'),
            'ket' => $request->input('ket')
            ]);
            if($tambahlokasi){
                
                return redirect('lokasi');
            }else
            return "input data gagal";
        } catch (\exception $e) {
            return $e->getMessage();
        }
    }
    private function getLokasi($id)
    {
        return collect(DB::select('SELECT * FROM lokasi Where id_lokasi = ?', [$id]))->fristOrFail();
    }
    public function edit($id = null )
    {
        $edit = $this->getLokasi($id);

        return view('lokasi.edit', compact('edit'));
    }
    public function update(Request $request)
    {
        try{
            $data = [
                'id_lokasi' => $request->input('id'),
                'nama_lokasi' => $request->input('nama lokasi')
            ];
            DB::table('lokasi')->Where('id_supplier','=', $request->input('id_lokasi'))->update($data);
            return redirect('lokasi');
        } catch(\Exception $e) {
            return $e->getMessege();
            dd('gagal');
        }
    }
    public function hapus($id = null) {
        try {
            $hapus = DB::table('lokasi')->Where('id_lokasi', $id)->delete();
            if($hapus){
                return back();
            }
        }catch(\Exception $e){
            $e->getMessege();
        }
    }
}
