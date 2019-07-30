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
        $data = $request->all();
        if(TanggapanLaporan::validator($data)){
            $data['user_id'] = Auth::user()->id;
            $laporan = TanggapanLaporan::create($data);
        }
        return redirect()->route('laporan.detail',['laporan'=>$request->laporan_id]);
    }

}
