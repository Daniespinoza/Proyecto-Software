<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventtype extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'subtipo',
    'descripcion'
  ];

  public function Events(){
    return $this->belongsTo('App\Event');
  }
}
