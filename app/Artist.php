<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    public function concert(){
        return $this->belongsToMany('App\concert');
    }
}
