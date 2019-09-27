<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos extends Model
{
    use SoftDeletes;
    protected $table = 'productos';

    public function inventario(){
        return $this->hasOne('App\Inventario','producto','id');
    }

    public function tipos(){
        return $this->hasOne('App\TiposProducto','id','tipo');
    }

    public function marcas(){
        return $this->hasOne('App\Marcas','id','marca')->with('padre');
    }

    public function categorias(){
        return $this->hasOne('App\Categorias','id','categoria')->with('padre');
    }

    public function presentaciones(){
        return $this->hasMany('App\Presentaciones','producto','id');
    }

    public function imagenes(){
        return $this->hasMany('App\ImagenesProductos','producto','id');
    }
}
