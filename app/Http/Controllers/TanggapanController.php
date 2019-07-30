<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Model\JenisLaporan;
use App\Model\Laporan;
use App\Model\TanggapanLaporan;

class TanggapanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        
        $this->validate($request,[
            'tanggapan'=>'required|string'
        ]);
        
        $laporan = TanggapanLaporan::create($request->all());

        return redirect()->route('laporan.detail',['laporan'=>$request->laporan_id]);
    }

}
