<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $data = DB::table('barang')->get();
        return view('barang.index', compact('data'));
    }    
}
