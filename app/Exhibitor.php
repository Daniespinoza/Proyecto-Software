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
    'alu_celular',
    'alu_email',
    'semestres_aprobados',
    'semestre_actual',
    'direccion',
    'id_comuna',
    'activo'
  ];
  protected $hidden = [
    'password','rememberToken'
  ];
}
