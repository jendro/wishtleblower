<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Model\JenisLaporan;
use App\Model\Laporan;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function admin()
    {
        if(Auth::user()->userrole!='admin'){
            return redirect()->route('laporan.index');
        }else{
            return view('laporan.admin',[
                'menu'=>'lapor',
                'laporan_r'=>Laporan::all()
            ]);
        }
    }

    public function index()
    {
        return view('laporan.index',[
            'menu'=>'lapor',
            'laporan_r'=>Laporan::dataUser()->get()
        ]);
    }

    public function detail(Laporan $laporan)
    {
        if(Auth::user()->userrole == 'admin' || $laporan->user_id == Auth::user()->id){
            return view('laporan.detail',[
                'menu'=>'lapor',
                'laporan'=>$laporan
            ]);
        }else{
            return redirect()->route('laporan.index');
        }
    }
    
    public function add()
    {
        return view('laporan.form.add',[
            'menu'=>'lapor',
            'jenis_laporan_r'=>JenisLaporan::pluck('jenis_laporan','id')
        ]);
    }

    public function create(Request $request)
    {
        // dd(Auth::user());
        $data = $request->all();
        if(Laporan::validator($data)){
            $data['user_id'] = Auth::user()->id;
            $laporan = Laporan::create($data);
            return redirect()->route('laporan.detail',['laporan'=>$laporan->id]);
        }else{
            return redirect()->route('laporan.add');
        }
    }

}
