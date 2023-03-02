<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
      $bgm = collect( DB::select("SELECT * FROM  jumlah_barangmasuk"))->firstOrFail()->jml_barangmasuk;

        return view('dashboard.index', compact('bgm'));
    }
   
}

