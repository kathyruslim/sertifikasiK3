<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class karyawan extends Model
{
	protected $table = "karyawan";
	protected $fillable = [
       	'id', 'nik', 'nama', 'departemen', 'bagian'
    ];

    public function inputDataSertifikasi(){
    	return $this->hasOne('App\inputSertifikasi');
    }
}