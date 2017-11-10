<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_turno',
    'id_material',
    'cantidad'
  ];
}
