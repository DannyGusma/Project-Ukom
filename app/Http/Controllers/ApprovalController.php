<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 

class ApprovalController extends Controller
{
    
    public function indexBarangBaru(){

        // data pending manajemen
        $data = DB::table('barangmasuk')->paginate(10);

        return view('approval.barang_baru.index', compact('data'));
    }

    public function searchindexBarangBaru(Request $request){
        $search = $request->input('search');

        // data pending manajemen
        $data = DB::table('barangmasuk')
                    ->where('nama_barang','like',"%".$search."%")
                    ->orWhere('total_barang','like',"%".$search."%")
                    ->orWhere('kode_barang','like',"%".$search."%")
                    ->orWhere('status_approval','like',"%".$search."%")
                    ->paginate(10);

        return view('approval.barang_baru.index', compact('data'));
    }
    private function getbarangmasuk($id)
    {
        return collect(DB::select('SELECT * FROM barang_masuk WHERE id_masuk = ?', [$id]))->firstOrFail();
    }
        // APPROVAL
    public function statusSetujuBarangBaru($id=null){
        try{
            // $id_pengguna = DB::table('pengguna')
            //     ->select('id_pengguna')
            //     ->where('username',Auth::user()->username)
            //     ->get();
            //     $array = Arr::pluck($id_pengguna, 'id_pengguna');
            //     $approver = Arr::get($array, '0');
            // dd($id);

            $status = [
                'approver'=> $approver,
                'status_approval' => ('setuju'),
                'tgl_approve' => NOW()
            ];
            $hapus = DB::table('barangmasuk')
                            ->where('id_masuk',$id)
                            ->update($status);
            if($hapus){
                flash()->options([
                    'timeout' => 3000, // 3 seconds
                    'position' => 'top-center',
                ])
                ->addSuccess('Data berhasil disimpan.');
                return redirect('approval/BB');
            }
        }catch(\Exception $e){
            $e->getMessage();
        }
    }
    public function statusTidakSetujuBarangBaru($id=null){
        try{
            // $id_pengguna = DB::table('pengguna')
            //     ->select('id_pengguna')
            //     ->where('username',Auth::user()->username)
            //     ->get();
            //     $array = Arr::pluck($id_pengguna, 'id_pengguna');
            $approver = Arr::get($array, '0');

            $status = [
                'approver'=>$approver,
                'status_approval' => ('tidak'),
                'tgl_approve' => NOW()
            ];
            $hapus = DB::table('barangmasuk')
                            ->where('id_masuk',$id)
                            ->update($status);
            if($hapus){
                flash()->options([
                    'timeout' => 3000, // 3 seconds
                    'position' => 'top-center',
                ])
                ->addSuccess('Data berhasil disimpan.');
                return redirect('approval/BB');
            }
        }catch(\Exception $e){
            $e->getMessage();
        }
    }
}
