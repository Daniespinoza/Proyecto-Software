<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_expositor',
    'descripcion',
    'firma',
    'documento',
  ];
}
