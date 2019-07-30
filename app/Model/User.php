<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'users';

    protected $fillable = [
        'userrole', 'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** Authorization */
    public function isAdmin()
    {
        return $this->userrole=='admin';
    }


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
