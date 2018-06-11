<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //
    public function ticket(){
        return $this->hasMany('App\ticket');
    }
    
    public function concert(){
        return $this->belongsTo('App\concert');
    }
    
    public function event(){
        return $this->belongsTo('App\location');
    }
}
