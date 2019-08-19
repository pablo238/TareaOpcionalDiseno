<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    protected $fillable = [
        'cedula', 'nombre'
    ];
}
