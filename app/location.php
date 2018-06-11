<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    //
    
        public function location(){
        return $this->hasMany('App\event');
    }
}
