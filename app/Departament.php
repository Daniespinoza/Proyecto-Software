<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = ['descripcion'];

  public function Establishments(){
    return $this->belongsTo('App\Establishment');
  }
}
