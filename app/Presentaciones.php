<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentaciones extends Model
{
    protected $table = 'presentaciones';

    public function productos(){
        return $this->hasOne('App\Productos','id','producto');
    }


}
