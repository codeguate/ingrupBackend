<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenesProductos extends Model
{
    protected $table = 'imagenes_productos';

    public function productos(){
        return $this->hasOne('App\Productos','id','producto');
    }
}
