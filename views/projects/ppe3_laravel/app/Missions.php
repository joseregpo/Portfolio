<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missions extends Model
{
    //
    protected $table = 'missions';
    protected $primaryKey = 'id_mission';
    public $timestamps = false;
    
    public function Visiteur() { return $this->hasOne('App\Visiteur'); }
        
    
}
