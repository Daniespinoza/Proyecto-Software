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

  public function Regions(){
    return $this->hasOne('App\Commune');
  }
  public function Exhibitos(){
    return $this->belongsTo('App\Exhibitor');
  }
  public function Establishments(){
    return $this->belongsTo('App\Establishment');
  }

}
