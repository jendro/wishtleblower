<?php

namespace App\Model;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    
    protected $table = 'laporan';
    
    protected $fillable = [
        'jenis_laporan_id', 'user_id', 'nama_pelapor', 'telepon_palapor', 'email_pelapor', 'nama_terlapor', 'jabatan_terlapor', 'waktu_kejadian', 'lokasi_kejadian', 'kronologis_kejadian', 'detail_kejadian'
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function($query){
            $query->user_id = auth()->user()->id;
        });

    }


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
