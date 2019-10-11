<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainSliders extends Model
{
    protected $table = 'main_sliders';

    public function productos(){
        return $this->hasOne('App\Productos','id','producto');
    }
}
