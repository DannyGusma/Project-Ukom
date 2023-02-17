<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LogModel;

class LoggingController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('logg')->paginate(10);
        return view('logging.index', compact('data'));
    }
}
