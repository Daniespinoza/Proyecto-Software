<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['permiso'];

    public function Users(){
      return $this->belongsTo('App\User');
    }

    public function Staffs(){
      return $this->belongsTo('App\Staff');
    }
}
