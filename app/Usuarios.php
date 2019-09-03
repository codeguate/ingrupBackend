<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'usuarios';

    protected $hidden = array('password','remember_token');

    public function empleados(){
        return $this->hasOne('App\Empleados','id','empleado');
    }

    public function roles(){
        return $this->hasOne('App\Roles','id','rol');
    }
}
