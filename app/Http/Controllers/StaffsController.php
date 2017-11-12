<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffsController extends Controller
{
  //exhibitors
  public function addexp()
  {
    return view('personal/addexhibitor');
  }
  public function deleteexp(){
    return view('personal/deleteexhibitor');
  }
  public function viewexp(){
    return view('personal/viewexhibitor');
  }
  public function updateexp(){
    return view('personal/updateexhibitor');
  }

  //establishments
  public function addestablish()
  {
    return view('establecimientos/addestablishment');
  }
  public function deleteestablish(){
    return view('establecimientos/deleteestablishment');
  }
  public function viewestablish(){
    return view('establecimientos/viewestablishment');
  }
  public function updateestablish(){
    return view('establecimientos/updateestablishment');
  }

  //materials
  public function addmat()
  {
    return view('materiales/addmaterial');
  }
  public function deletemat(){
    return view('materiales/deletematerial');
  }
  public function viewmat(){
    return view('materiales/viewmaterial');
  }
  public function updatemat(){
    return view('materiales/updatematerial');
  }

  //Agreements
  public function addagree(){
    return view('personal/addagreement');
  }

}
