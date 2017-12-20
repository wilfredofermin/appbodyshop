<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dbrequest extends Model
{
    protected $fillable = [
        'ubicacion', 'servicio', 'area','prioridad','category','subcategory','type','description','estado','imagen','fecha_compromiso','usr_asignado','asignacion_primaria','asignacion_secundaria'
    ];

    protected $hidden = [
        'remember_token',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function assign(){
        return $this->belongsTo(Assign::class);
    }


}

