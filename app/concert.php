<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concert extends Model
{
    //
    public function artist(){
        return $this->belongsToMany('App\artist');
    }
    
    public function event(){
        return $this->hasMany('App\event');
    }
    
//    public function location(){
//        return $this->belongsToMany('App\location');
//    }
}

