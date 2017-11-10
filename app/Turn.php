<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_jornada',
    'id_evento'
  ];
}
