<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\JenisLaporan;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('home',[
            'menu'=>'home',
            'jenis_laporan_r'=>JenisLaporan::all()->chunk(2)
        ]);
    }
}
