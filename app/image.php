<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    //
    public function concert() {
        return $this->belongsTo('App\concert');
    }
}
