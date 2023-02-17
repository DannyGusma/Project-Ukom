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
        $data = DB::table('barangmasuk')->get();
        return view('barang.keluar.tambah', compact('data'));
    }
    public function store(Request $request, $id=null)
    { 
        $data = DB::table('barangmasuk')->where('id_masuk', $id)->first(); 
        // dd($request->input('total_barang'));
        try {
        $tambahBarangkeluar = DB::table('barangkeluar')->insert([
            // 'id_barang' => $kode_baru,
            // 'id_keluar' => $request->input('id_keluar'),
            'nama_barang' => $data->nama_barang,
            'kode_barang' => $data->kode_barang,
            'total_barang' => $request->input('total_barang'), 
            'tanggal_keluar' => NOW() 
        ]);
        $total = $data->total_barang - $request->input('total_barang');
        $minus_barangmasuk = DB::table('barangmasuk')->where('id_masuk', $id)->update([
            'total_barang' => $total
        ]);
        if ($tambahBarangkeluar){ 
            return redirect('barang/keluar');
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

        $edit = $this->getBarang($id);

        return view('barang.keluar.edit', compact('edit'));
    }
    public function update(Request $request )
    {
        try {
            // dd($request->all());
            $data = [
                'id_keluar'   => $request->input('id_keluar'),
                'nama_barang'   => $request->input('nama_barang'),
                'total_barang' => $request->input('total_barang'),
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
    public function hapus(Request $request ,$id=null){
        try{
            $databarang = DB::table('barangmasuk')->where('id_masuk', '=', $id)->first();
            // $jumlahKeluar = 469;
            $jumlahKeluar = $request->input('jumlah_keluar');

            DB::table('barangmasuk')->where('id_masuk', '=', $id)->update([
                'total_barang' => $databarang->total_barang - $jumlahKeluar
            ]);

            $databarangkeluar = DB::table('barangkeluar')
            ->insert([
                'nama_barang' => $databarang->nama_barang,
                'total_barang' => $databarang->total_barang,
                'kode_barang' => $databarang->kode_barang,
                'jumlah_keluar' => $jumlahKeluar,
                'tanggal_keluar' => now()
            ]);

                return redirect('barang/keluar');
        }catch(\Exception $e){
            $e->getMessage();
        }
    }
}
