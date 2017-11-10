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


}
