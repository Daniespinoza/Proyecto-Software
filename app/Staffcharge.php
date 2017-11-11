<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffcharge extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = ['descripcion'];

    public function Staffs(){
      return $this->belongsTo('App\Staff');
    }
    

}
