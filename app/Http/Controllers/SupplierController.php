<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SupplierController extends Controller
{
    public function index(){
        $data = DB::table('supplier')->get();
        return view('supplier.index', compact('data'));
    }
    public function formTambah(){
        return view('supplier.tambah');
    }
    public function store(Request $request)
    {
        $request->validate([ 
            // nama supplier tidak boleh sama dan sama yang lainnya.
            'nama_supplier' => 'unique:supplier,nama_supplier', 
            'alamat_supplier' => 'unique:suplier,alamat_supplier',
            'telepon_supplier' => 'unique:supplier,telepon_supplier'

        ],
        [
            'nama_supplier.unique' => 'Nama tersebut sudah digunakan!',
            'telepon_suplier.unique' => 'Kontak tersebut sudah digunakan!',
            'alamat_suplier.unique' => 'Alamat tersebut sudah digunakan!',
        ]);
        try {
        $dariFunction = DB::select('SELECT newIdSupplier() AS id_supplier');
        // dd($dariFunction);
        $array = Arr::pluck($dariFunction, 'id_supplier');
        $kode_baru = Arr::get($array, '0');
        // dd($kode_baru);
        $tambahSupplier = DB::table('supplier')->insert([
            'id_supplier' => $kode_baru,
            'nama_supplier' => $request->input('nama'),
            'alamat_supplier' => $request->input('alamat'),
            'telepon_supplier' => $request->input('telepon')
        ]);
        if ($tambahSupplier){

            return redirect('supplier');
        }else
            return "input data gagal";
        } catch (\Exception $e) {
        return  $e->getMessage();
        }
    }
    private function getSupplier($id)
    {
        return collect(DB::select('SELECT * FROM supplier WHERE id_supplier = ?', [$id]))->firstOrFail();
    }
    public function edit($id = null)
    {

        $edit = $this->getSupplier($id);

        return view('supplier.edit', compact('edit'));
    }
    public function update(Request $request )
    {
        try {
            // dd($request->all());
            $data = [
                'nama_supplier'   => $request->input('nama'),
                'alamat_supplier' => $request->input('alamat'),
                'telepon_supplier' => $request->input('telepon')
            ];
            DB::table('supplier')->where('id_supplier', '=', $request->input('id_supplier'))->update($data);
            return redirect('supplier');

        } catch (\Exception $e) {
            return $e->getMessage();
            dd("gagal");
        }
        
    }
    public function hapus($id=null){
        try{
            $hapus = DB::table('supplier')->where('id_supplier',$id)->delete();
            if($hapus){

                return back();
            }
        }catch(\Exception $e){
            $e->getMessage();
        }
    }




} 

