<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';

    public function subcategorias(){
        return $this->hasMany('App\Categorias','padre','id')->with('subcategorias');
    }

    public function padre(){
        return $this->hasOne('App\Categorias','id','padre')->with('padre');
    }
    
    public function productos(){
        return $this->hasMany('App\Productos','categoria','id')->with('tipos','categorias','marcas','imagenes');
    }
}
