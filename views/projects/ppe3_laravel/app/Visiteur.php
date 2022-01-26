<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    protected $table = 'visiteurs';
    protected $primaryKey = 'id_personnel';
    public $timestamps = false;
    
    public function user() { 
        return $this->hasOne('App\User'); 
    }

    public function Missions() { return $this->hasMany('App\Missions'); }

}
