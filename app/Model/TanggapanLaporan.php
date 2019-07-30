<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TanggapanLaporan extends Model
{
    
    protected $table = 'tanggapan_laporan';

    protected $fillable = ['laporan_id','user_id','tanggapan'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($query){
            $query->user_id = auth()->user()->id;
        });

    }
    
    /** START RELATION */    
    public function laporan()
    {
        return $this->belongsTo('App\Model\Laporan','laporan_id');    
    }

    public function petugas()
    {
        return $this->belongsTo('App\Model\User','user_id');    
    }
    
    /** END OF RELATION */


}
