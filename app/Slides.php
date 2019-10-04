<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    protected $table = 'slides';

    public function productos(){
        return $this->hasOne('App\Productos','id','producto');
    }
}
