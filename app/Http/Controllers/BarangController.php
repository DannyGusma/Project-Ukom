<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BarangController extends Controller
{
   public function index(){
    $barangmasuk = DB::table('barangmasuk')->get();
    $barangkeluar = DB::table('barangkeluar')->get();
    return view('barang.index', compact('barangmasuk','barangkeluar'));
  }
}
