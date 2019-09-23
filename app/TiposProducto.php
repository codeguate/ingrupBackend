<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TiposProducto extends Model
{
    protected $table = 'tiposproducto';

    
    public function productos(){
        return $this->hasMany('App\Productos','tipo','id');
    }
}
