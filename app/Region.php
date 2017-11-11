<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = ['nombre'];

  public function Comunnes(){
    return $this->hasMany('App\Commune');
  }

}
