<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Laravolt\Avatar\Facade as Avatar;



use App\Models\LevelUserModel;
use App\Models\PenggunaModel;
use App\Models\AdminModel;
use App\Models\KepsekModel;


class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $data = null;
        if ($request->has('search')) {
            $search = $request->input('search');
            $data = DB::table('pengguna_admin_kepsek')
                ->where('username', 'like', "%" . $search . "%")
                ->orWhere('email', 'like', "%" . $search . "%")
                ->orWhere('nama_level', 'like', "%" . $search . "%")
                ->orderBy('id_level')
                ->paginate(5);
        } else {
            $data = DB::table('pengguna_admin_kepsek')
                ->paginate(5);
            // dd($data);
        }
        // dd($data);

        return view('pengguna.index', compact('data'));
    }
   }
