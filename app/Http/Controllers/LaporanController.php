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
    
    public function admin(Request $request)
    {
        if(Auth::user()->userrole!='admin'){
            return redirect()->route('laporan.index');
        }else{
            $jumlah = 10;
            return view('laporan.admin',[
                'menu'=>'lapor',
                'no'=>($request->page-1)*$jumlah+1,
                'laporan_r'=>Laporan::paginate($jumlah)
            ]);
        }
    }

    public function index(Request $request)
    {
        $jumlah = 10;
        return view('laporan.index',[
            'menu'=>'lapor',
            'no'=>($request->page-1)*$jumlah+1,
            'laporan_r'=>Laporan::dataUser()->paginate($jumlah)
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
        return view('laporan.form',[
            'menu'=>'lapor',
            'jenis_laporan_r'=>JenisLaporan::pluck('jenis_laporan','id')
        ]);
    }

    public function create(Request $request)
    {
        // dd(Auth::user());
        $this->validate($request,[
            'nama_pelapor'=>'required|string',
            'telepon_pelapor'=>'required|string',
            'email_pelapor'=>'required|email',
            'nama_terlapor'=>'required|string',
            'jabatan_terlapor'=>'required|string',
            'waktu_kejadian'=>'required|string',
            'lokasi_kejadian'=>'required|string',
            'kronologis_kejadian'=>'required|string',
            'detail_kejadian'=>'required|string',
            'file'=>'mimes:jpeg,jpg,png,bmp,doc,docx,pdf,xls,xlsx,mp3,mp4,mpeg,avi,wmp,mkv|max:6000'
        ]);
            
        $data = $request->all();
        $laporan = Laporan::create($data);
        $laporan->uploadFile($request->file('file'));
        return redirect()->route('laporan.detail',['laporan'=>$laporan->id]);
    }

}
