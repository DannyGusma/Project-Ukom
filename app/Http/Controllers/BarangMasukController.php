<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class BarangMasukController extends Controller
{
    public function index(){
        $data = DB::table('barangmasuk')->get();
        return view('barang.masuk.index', compact('data'));
    }    

    private function getBarangmasuk($id)
    {
        return collect(DB::select('SELECT * FROM barangmasuk WHERE id_masuk = ?', [$id]))->firstOrFail();
    }

    private function getSupplier(): Collection
    {
        return collect(DB::select('SELECT * FROM supplier'));   
    }

    public function formTambah(){
        $getspr = $this->getSupplier();
        
        return view('barang.masuk.tambah', compact('getspr'));
    }


    public function store(Request $request)
    {
        try {

            $dariFunction = DB::select('SELECT newkodebarang() AS kodebarang');
            $array = Arr::pluck($dariFunction, 'kodebarang');
            $kode_baru = Arr::get($array, '0');

        $tambahBarangmasuk = DB::table('barangmasuk')->insert([
            // 'id_barang' => $kode_baru,
            // 'id_masuk' => $request->input('id_masuk'),
            'nama_barang' => $request->input('nama_barang'),
            'total_barang' => $request->input('total_barang'),
            'kode_barang' => $kode_baru,
            'id_supplier' => $request->input('id_supplier'),
            'tanggal_masuk' => $request->input('tanggal_masuk')
        ]);
        if ($tambahBarangmasuk){

            return redirect('/barang/masuk');
        }else
            return "input data gagal";
        } catch (\Exception $e) {
        return  $e->getMessage();
        }
    }
  
    public function edit($id = null)
    {
        
        $edit = $this->getBarangmasuk($id);

        return view('barang.masuk.edit', compact('edit'));
    }
    public function update(Request $request )
    {
        
        // dd($data);
        try {
            // dd($request->all());
            $data = [ 
                'nama_barang'   => $request->input('nama_barang'),
                'total_barang'   => $request->input('total_barang'), 
                'tanggal_masuk' => $request->input('tanggal_masuk')
            ];
            DB::table('barangmasuk')->where('id_masuk', '=', $request->input('id_masuk'))->update($data);
            return redirect('/barang/masuk');

        } catch (\Exception $e) {
            return $e->getMessage();
            // dd("gagal");
        }
        
    }
    public function hapus($id=null){
        try{
            $hapus = DB::table('barang.masuk')->where('id_masuk',$id)->delete();
            if($hapus){

                return back();
            }
        }catch(\Exception $e){
            $e->getMessage();
        }
    }
}
