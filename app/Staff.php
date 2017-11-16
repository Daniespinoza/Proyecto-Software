<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'nombre',
      'apellido_paterno',
      'apellido_materno',
      'rut',
      'run',
      'correo',
      'activo',
      'id_rol',
      'id_user',
      'password'
    ];

    protected $hidden = [
      'password','rememberToken'
    ];

    //Relationships

    public function Roles(){
      return $this->hasOne('App\Role');
    }
    public function Events(){
      return $this->belongsTo('App\Event');
    }
    public function Users(){
      return $this->hasMany('App\User');
    }


}
