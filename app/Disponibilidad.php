<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'id_expositor',
      'lunes',
      'martes',
      'miercoles',
      'jueves',
      'viernes',
      'sabado',
      'total_m',
      'total_t'
    ];

    public function Exhibitors(){
      return $this->hasOne('App\Exhibitor');
    }
}
