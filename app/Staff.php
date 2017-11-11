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
      'id_cargo'
    ];

    protected $hidden = [
      'password','rememberToken'
    ];

    public function StaffCharges(){
      return $this->hasOne('App\StaffCharge');
    }
    public function Events(){
      return $this->belongsTo('App\Event');
    }


}
