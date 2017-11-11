<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtype extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = ['descripcion'];

  public function Eventtypes(){
    return $this->belongsTo('App\Eventtype');
  }
}
