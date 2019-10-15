<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainSliders extends Model
{
    protected $table = 'main_sliders';

    public function marcas(){
        return $this->hasOne('App\Marcas','id','marca');
    }
}
