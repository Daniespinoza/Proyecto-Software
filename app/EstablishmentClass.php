<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstablishmentClass extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'tipo'
  ];

  public function Establishments(){
    return $this->belongsTo('App\Establishments');
  }

}
