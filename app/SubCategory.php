<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //SubCategory pertence a una Category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
