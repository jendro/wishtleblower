<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    protected $table = 'users';


    /** START RELATION */
    
    public function laporan()
    {
        $this->hasMany('App\Model\Laporan','user_id');    
    }

    public function tanggapan()
    {
        $this->hasMany('App\Model\TanggapanLaporan','user_id');    
    }

    
    /** END OF RELATION */


}
