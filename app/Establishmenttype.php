<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishmenttype extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_subtipo',
    'descripcion'
  ];
}
