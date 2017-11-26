<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exhibitor extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'alu_nombre',
    'alu_apellido_paterno',
    'alu_apellido_materno',
    'alu_rut',
    'run',
    'genero',
    'alu_celular',
    'alu_email',
    'semestres_aprobados',
    'semestre_actual',
    'direccion',
    'id_comuna',
    'activo',
    'id_user',
    'id_carrera'

  ];
  protected $hidden = [
    'rememberToken'
  ];

  //Relationships

  public function Agreements(){
    return $this->belongsTo('App\Agreement');
  }
  public function Communes(){
    return $this->hasOne('App\Commune');
  }
  public function Capacitations(){
    return $this->belongsToMany('App\Capacitation');
  }
  public function Turndetails(){
    return $this->belongsToMany('App\Turndetail');
  }
  public function Users(){
    return $this->hasMany('App\User');
  }
  public function Carreras(){
    return $this->hasOne('App\Carrera');
  }
  public function Disponibilidads(){
    return $this->belongsTo('App\Disponibilidad');
  }


}
