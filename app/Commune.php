<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'nombre',
    'id_region',
  ];
}
