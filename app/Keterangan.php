<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
	protected $table = 'keterangans';
    protected $fillable = ['keterangan'];
    public $timestamps = true;


    public function Absensi(){
        return $this->hasmany('App\Absensi','id_keterangan');
    }  
}
