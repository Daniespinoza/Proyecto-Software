<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'id_turno',
    'id_material',
    'cantidad'
  ];
  public function Turns(){
    return $this->hasOne('App\Turn');
  }
  public function Materials(){
    return $this->hasMany('App\Material');
  }

}
