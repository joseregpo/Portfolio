<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    //    
    protected $table = 'regions';
    protected $primaryKey = 'id_regions';
    public $timestamps = false;

    public function user() { 
        return $this->hasMany(User::class, 'id_personnel'); 
    }
}
