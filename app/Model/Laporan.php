<?php

namespace App\Model;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    
    protected $table = 'laporan';

    public static function validator(array $data)
    {
        return Validator::make($data, [
            'nama_pelapor'=>['required','string'],
            'telepon_palapor'=>['required','string'],
            'email_pelapor'=>['required','email'],
            'nama_terlapor'=>['required','string'],
            'jabatan_terlapor'=>['required','string'],
            'waktu_kejadian'=>['required','string'],
            'lokasi_kejadian'=>['required','string'],
            'kronologis_kejadian'=>['required','string'],
            'detail_kejadian'=>['required','string'],
        ]);
    }
    
    protected $fillable = [
        'jenis_laporan_id', 'user_id', 'nama_pelapor', 'telepon_palapor', 'email_pelapor', 'nama_terlapor', 'jabatan_terlapor', 'waktu_kejadian', 'lokasi_kejadian', 'kronologis_kejadian', 'detail_kejadian'
    ];


    /** SCOPE */
    public function scopeDatauser($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }

    /** START RELATION */
    
    public function jenis_laporan()
    {
        return $this->belongsTo('App\Model\JenisLaporan','jenis_laporan_id');    
    }

    public function pelapor()
    {
        return  $this->belongsTo('App\Model\User','user_id');    
    }

    public function tanggapan()
    {
        return $this->hasMany('App\Model\TanggapanLaporan','laporan_id');    
    }
    
    /** END OF RELATION */


}
