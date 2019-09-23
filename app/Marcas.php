<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $table = 'marcas';

    public function submarca(){
        return $this->hasMany('App\Marcas','padre','id')->with('submarca');
    }

    public function padre(){
        return $this->hasOne('App\Marcas','id','padre')->with('padre');
    }
    
    public function productos(){
        return $this->hasMany('App\Productos','marca','id');
    }
}
