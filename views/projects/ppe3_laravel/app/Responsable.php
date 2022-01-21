<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'responsable_region';
    protected $primaryKey = 'id_personnel';
    public $timestamps = false;
}
