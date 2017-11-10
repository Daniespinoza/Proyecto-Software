<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_tipo_evento',
    'id_personal',
    'id_establecimiento'
  ];
}
