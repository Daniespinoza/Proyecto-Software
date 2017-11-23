<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = ['id_facultad','nombre'];


  public function Facultads()
  {
    return $this->hasOne('App\Facultad');
  }
  public function Exhibitors()
  {
    return $this->belongsTo('App\Exhibitor');
  }

}
