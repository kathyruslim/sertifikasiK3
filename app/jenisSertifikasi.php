<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class jenisSertifikasi extends Model
{
    	protected $table = "jenis_sertifikasi";
    	protected $fillable = [
        	'id', 'jenis', 'dasar'
    	];
		public function input_sertifikasi(){
    		return $this->hasMany('App\inputSertifikasi');
    	}
}