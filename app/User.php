<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Assign;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','departament','sucursal'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getIsAdminAttribute()
    {
        return $this->role==1; // Es un Administrador | is_admin
    }
    public function getIsSupportAttribute()
    {
        return $this->role==2; // Es un Supervisor o Soporte | is_soporte
    }
    public function getIsEvaluatorAttribute()
    {
        return $this->role==3; // Es un Client | is_evaluador
    }
    public function getIsClientAttribute()
    {
        return $this->role==4; // Es un Client | is_client
    }

    public function dbrequests(){
        return $this->hasMany('App\Dbrequest');
    }
    public function assign(){
        return $this->hasMany(Assign::class);
    }


}
