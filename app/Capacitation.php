<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitation extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_expositor',
    'descripcion',
    'activo',
  ];

  public function Exhibitors(){
    return $this->belongsToMany('App\Exhibitor');
  }

}
