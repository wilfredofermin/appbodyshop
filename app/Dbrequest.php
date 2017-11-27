<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dbrequest extends Model
{
    protected $fillable = [
        'ubicacion', 'servicio', 'area','prioridad','category','subcategory','type','description','estado','imagen'
    ];

    protected $hidden = [
        'remember_token',
    ];
}
