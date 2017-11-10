<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turndetail extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_turno',
    'id_expositor',
    'confirmacion',
    'asistencia'
  ];
}
