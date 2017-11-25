<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $primaryKey = 'id';


    protected $fillable = [
        'name', 'email', 'password', 'id_rol', 'activo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relationships

    public function Exhibitors(){
      return $this->belongTo('App\Exhibitor');
    }
    public function Staffs(){
      return $this->belongTo('App\Staff');
    }
    public function Roles(){
      return $this->hasOne('App\Role');
    }

}
