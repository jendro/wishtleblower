<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\JenisLaporan;

class AboutController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('about',[
            'menu'=>'about'
        ]);
    }
}
