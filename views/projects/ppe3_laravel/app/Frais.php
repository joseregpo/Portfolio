<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frais extends Model
{
    //    
    protected $table = 'frais';
    protected $primaryKey = 'id_frais';
    public $timestamps = false;


    public function Responsable() { return $this->hasOne('App\Responsable'); }
    public function Mission() { return $this->hasOne('App\Missions'); }


}
