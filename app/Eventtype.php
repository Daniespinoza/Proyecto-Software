<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventtype extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_subtipo',
    'descripcion'
  ];

  public function Subtypes(){
    return $this->hasOne('App\Subtype');
  }
  public function Events(){
    return $this->belongsTo('App\Event');
  }
}
