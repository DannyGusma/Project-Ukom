<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function indexBarangBaru(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $data = PengajuanBBModel::leftJoin('ruangan', 'pengajuan_bb.ruangan', '=', 'ruangan.id_ruangan')
                ->where('nama_barang', 'like', "%" . $search . "%")
                ->orWhere('total_harga', 'like', "%" . $search . "%")
                ->orWhere('tgl', 'like', "%" . $search . "%")
                ->orWhere('status_approval', 'like', "%" . $search . "%")
                ->paginate(10);
        } else {
            $data = PengajuanBBModel::leftJoin('ruangan', 'pengajuan_bb.ruangan', '=', 'ruangan.id_ruangan')->paginate(10);
        }

        return view('approval.barang_baru.index', compact('data'));
    }
}
