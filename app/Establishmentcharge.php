<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishmentcharge extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = ['descripcion'];

  public function Establishments(){
    return $this->belongsTo('App\Establishment');
  }

}
