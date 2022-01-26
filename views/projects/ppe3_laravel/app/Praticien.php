<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praticien extends Model
{
    protected $table = 'praticien';
    protected $primaryKey = 'id_particien';
    public $timestamps = false;
}
