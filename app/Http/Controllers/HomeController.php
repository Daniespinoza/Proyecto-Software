<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Event;
use App\Turndetail;
use App\Exhibitor;
use App\Turn;
use Auth;
use \Carbon\Carbon;

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

        if (Auth::user()->id_rol == 4){
          $expo = Exhibitor::where('id_user',Auth::user()->id)->get();
          $turns = Turndetail::where('id_expositor',$expo[0]->id)->where('confirmacion','=',1)->get();
          $count = DB::table('turndetails')->where('id_expositor','=',$expo[0]->id)->where('visto','=',0)->count();
          //dd($tcount);
          //$count = 0;
          $id_turnos = array();
          $today = Carbon::now();
          foreach ($turns as $turno) {
              array_push($id_turnos,$turno->id_turno);
            }
          $TURNOS = Turn::all();
          $eventos_user = array();
          foreach ($TURNOS as $tur) {
            //dd($ev);
              if (in_array($tur->id,$id_turnos)) {
                array_push($eventos_user,$tur->id_evento);
              }
          }

          $eventss = Event::all()->toArray();

          $_event = array();
          foreach ($eventss as $ev) {
            if(in_array($ev['id'],$eventos_user)){
              array_push($_event,$ev);
            }
          }
          $event = collect($_event);
          $event->toJson();
          return view('index',compact('event','expo','turns','count'));
    }else{
      $event = Event::all();
      $event->toJson();
      return view('eventos.index',compact('event','count'));
    }
}




}
