<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class inputSertifikasi extends Model
{
	protected $table = "input_sertifikasi";
    protected $fillable = [
        	'karyawan_nik', 'jenis_sertifikasi_id', 'masa_berlaku', 'upload'
    ];

	//public function karyawan(){
    //    return $this->hasMany('App\karyawan');
    //}

    //public function jenisSertifikasi(){
    //    return $this->hasOne('App\jenisSertifikasi');
    //}

    public function Jenis()
    {
        return $this->belongsTo('App\jenisSertifikasi','jenis_sertifikasi_id');
    }
    public function Karyawan()
    {
        return $this->belongsTo('App\Karyawan','karyawan_nik', 'nik');
    }

}