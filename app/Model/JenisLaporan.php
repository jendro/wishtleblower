<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JenisLaporan extends Model
{
    
    protected $table = 'jenis_laporan';


    /** START RELATION */
    
    public function laporan()
    {
        $this->hasMany('App\Model\Laporan','jenis_laporan_id');    
    }
    
    /** END OF RELATION */


}
