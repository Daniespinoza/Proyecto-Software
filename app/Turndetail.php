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
  public function Exhibitors(){
    return $this->belongsToMany('App\Exhibitor');
  }
  public function Turns(){
    return $this->hasOne('App\Turn');
  }
}
