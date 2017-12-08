<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Turndetail;
use App\Exhibitor;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->roles('admin');

        $eventos = Event::all();
        $eventos->toJson();

        if (Auth::user()->id_rol == 4){
          $expo = Exhibitor::where('id_user',Auth::user()->id)->get();
          $turns = Turndetail::where('id_expositor',$expo[0]->id)->get();
        //  dd($turns);
          $count = 0;
          foreach ($turns as $turno) {
              if ($turno->visto == 0) {
                $count++;
              }
          }
        }

        return view('index',compact('eventos','expo','turns','count'));
    }
}
