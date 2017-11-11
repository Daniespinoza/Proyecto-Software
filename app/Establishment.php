<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = [
      'rbd',
      'nombre_establecimiento',
      'id_comuna',
      'direccion',
      'id_depto',
      'id_tipo_establecimiento',
      'encargado',
      'id_cargo',
      'correo',
      'telefono',
      'pace'
    ];

    public function Communes(){
      return $this->hasOne('App\Commune');
    }
    public function Departments(){
      return $this->hasOne('App\Department');
    }
    public function Establishmenttypes(){
      return $this->hasOne('App\Establishmenttype');
    }
    public function Staffcharges(){
      return $this->hasOne('App\Staffcharge');
    }
    public function Events(){
      return $this->belongsTo('App\Event');
    }


}
