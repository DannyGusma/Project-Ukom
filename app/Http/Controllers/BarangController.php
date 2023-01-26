<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BarangController extends Controller
{
    public function index(){
        $data = DB::table('barang')->get();
        return view('barang.index', compact('data'));
    }    
    public function formTambah(){
        return view('barang.tambah');
    }
    public function store(Request $request)
    {
        $request->validate([ 
            // nama barang tidak boleh sama dan sama yang lainnya.
            'nama_barang' => 'unique:barang,nama_barang', 
            'merk' => 'unique:barang,merk_barang',
            'total_barang' => 'unique:barang,total_barang',
            'no_seri_pabrik' => 'unique:barang,no_seri_pabrik'

        ],
        [
            'nama_barang.unique' => 'Nama Barang tersebut sudah digunakan!',
            'merk.unique' => 'Merk tersebut sudah digunakan!',
            'total_barang.unique' => 'Alamat tersebut sudah digunakan!',
            'no_seri_pabrik.unique' => 'No Seri Pabrik tersebut sudah digunakan!',
        ]);
        try {
        $dariFunction = DB::select('SELECT newIdBarang() AS id_barang');
        // dd($dariFunction);
        $array = Arr::pluck($dariFunction, 'id_barang');
        $kode_baru = Arr::get($array, '0');
        // dd($kode_baru);
        $tambahBarang = DB::table('barang')->insert([
            'id_barang' => $kode_baru,
            'nama_barang' => $request->input('nama'),
            'merk' => $request->input('merk'),
            'total_barang' => $request->input('total barang'),
            'no_seri_pabrik' => $request->input('no seri pabrik')
        ]);
        if ($tambahBarang){

            return redirect('barang');
        }else
            return "input data gagal";
        } catch (\Exception $e) {
        return  $e->getMessage();
        }
    }
    private function getBarang($id)
    {
        return collect(DB::select('SELECT * FROM barang WHERE id_barang = ?', [$id]))->firstOrFail();
    }
    public function edit($id = null)
    {

        $edit = $this->getBarang($id);

        return view('barang.edit', compact('edit'));
    }
    public function update(Request $request )
    {
        try {
            // dd($request->all());
            $data = [
                'nama_barang'   => $request->input('nama barang'),
                'merk_barang' => $request->input('merk barang'),
                'total_barang' => $request->input('total barang'),
                'no_seri_pabrik' => $request->input('no seri pabrik')
            ];
            DB::table('barang')->where('id_barang', '=', $request->input('id_barang'))->update($data);
            return redirect('barang');

        } catch (\Exception $e) {
            return $e->getMessage();
            dd("gagal");
        }
        
    }
    public function hapus($id=null){
        try{
            $hapus = DB::table('barang')->where('id_barang',$id)->delete();
            if($hapus){

                return back();
            }
        }catch(\Exception $e){
            $e->getMessage();
        }
    }
}
