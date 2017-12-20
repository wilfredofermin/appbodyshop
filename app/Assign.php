<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Dbrequest;

class Assign extends Model
{

    //SubCategory pertence a una Category
    public function user(){
        return $this->belongsTo(User::class);
    }

}
