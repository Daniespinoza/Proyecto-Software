<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
    'descripcion',
    'stock_total',
    'activo'
  ];

  public function Stocks(){
    return $this->belongsTo('App\Material');
  }
}
