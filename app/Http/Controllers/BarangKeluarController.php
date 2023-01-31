<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BarangKeluarController extends Controller
{
    public function index(){
        $data = DB::table('barangkeluar')->get();
        return view('barang.keluar.index', compact('data'));
    }    
    public function formTambah(){
        return view('barang.keluar.tambah');
    }
    public function store(Request $request)
    {
        // $request->validate([ 
        //     // nama barang tidak boleh sama dan sama yang lainnya.
        //     'nama_barang' => 'unique:barang,nama_barang', 
        //     'merk' => 'unique:barang,merk_barang',
        //     'total_barang' => 'unique:barang,total_barang',
        //     'no_seri_pabrik' => 'unique:barang,no_seri_pabrik'

        // ],
        // [
        //     'nama_barang.unique' => 'Nama Barang tersebut sudah digunakan!',
        //     'merk.unique' => 'Merk tersebut sudah digunakan!',
        //     'total_barang.unique' => 'Alamat tersebut sudah digunakan!',
        //     'no_seri_pabrik.unique' => 'No Seri Pabrik tersebut sudah digunakan!',
        // ]);
        try {
        // $dariFunction = DB::select('SELECT newIdBarang() AS id_barang');
        // // dd($dariFunction);
        // $array = Arr::pluck($dariFunction, 'id_barang');
        // $kode_baru = Arr::get($array, '0');
        // dd($kode_baru);
        $tambahBarangkeluar = DB::table('barangkeluar')->insert([
            // 'id_barang' => $kode_baru,
            'id_keluar' => $request->input('id_keluar'),
            'kode_barang' => $request->input('kode_barang'),
            'jumlah_keluar' => $request->input('jumlah_keluar'),
            'tanggal_keluar' => $request->input('tanggal_keluar')
        ]);
        if ($tambahBarangkeluar){

            return redirect('barang.keluar');
        }else
            return "input data gagal";
        } catch (\Exception $e) {
        return  $e->getMessage();
        }
    }
    private function getBarangkeluar($id)
    {
        return collect(DB::select('SELECT * FROM barangkeluar WHERE id_keluar = ?', [$id]))->firstOrFail();
    }
    public function edit($id = null)
    {

        $edit = $this->getBarangkeluar($id);

        return view('barang.keluar.edit', compact('edit'));
    }
    public function update(Request $request )
    {
        try {
            // dd($request->all());
            $data = [
                'id_keluar'   => $request->input('id_keluar'),
                'kode_barang' => $request->input('kode_barang'),
                'jumlah_keluar' => $request->input('jumlah_keluar'),
                'tanggal_keluar' => $request->input('tanggal_keluar')
            ];
            DB::table('barang.keluar')->where('id_barang', '=', $request->input('id_keluar'))->update($data);
            return redirect('barang.keluar');

        } catch (\Exception $e) {
            return $e->getMessage();
            dd("gagal");
        }
        
    }
    public function hapus($id=null){
        try{
            $hapus = DB::table('barang.keluar')->where('id_keluar',$id)->delete();
            if($hapus){

                return back();
            }
        }catch(\Exception $e){
            $e->getMessage();
        }
    }
}
