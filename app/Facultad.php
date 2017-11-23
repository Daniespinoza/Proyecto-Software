<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{

  protected $primaryKey = 'id';

  protected $fillable = ['nombre'];


  public function Carreras()
  {
    return $this->belongsTo('App\Carrera');
  }

}
