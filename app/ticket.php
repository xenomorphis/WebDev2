<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    //
    public function event(){
        return $this->belongsTo('App\event');
    }
}
