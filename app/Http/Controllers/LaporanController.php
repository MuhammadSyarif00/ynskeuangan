<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\V_kasmasuk;
use App\Models\V_kaskeluar;

class LaporanController extends Controller
{
    public function index()
    {
        $masuks = V_kasmasuk::all();
        $keluars = V_kaskeluar::all();
        return view('indexlaporan',['masuks' => $masuks, 'keluars' => $keluars]);
    }

    
}
