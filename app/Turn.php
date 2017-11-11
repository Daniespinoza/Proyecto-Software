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

  public function Events(){
      return $this->hasOne('App\Event');
  }

  public function Jornadas(){
    return $this->hasOne('App\Jornada');
  }

  public function Turndetails(){
    return $this->belongsTo('App\Turndetail');
  }
  public function Stocks(){
    return $this->belongsTo('App\Stock');
  }
}
