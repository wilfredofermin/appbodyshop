<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $fillable = [
        'ubicacion', 'servicio', 'area','prioridad','category','subcategory','type','description','estado','user','condicion'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

