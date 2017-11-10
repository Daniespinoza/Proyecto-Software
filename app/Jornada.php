<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'descripcion',
    'valor',
    'activo'
  ];
}
