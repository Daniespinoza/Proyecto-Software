<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_tipo_evento',
    'id_personal',
    'id_establecimiento',
    'cupos',
    'fecha_inicio'
  ];

  public function Staffs(){
    return $this->hasOne('App\Staff');
  }
  public function Eventtypes(){
    return $this->hasOne('App\Eventtype');
  }
  public function Establishments(){
    return $this->hasOne('App\Establishment');
  }
  public function Turns(){
    return $this->belongsTo('App\Turn');
  }


}
