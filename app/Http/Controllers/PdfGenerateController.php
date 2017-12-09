<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate \ Support \ Facades \ Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Exhibitor;
use App\User;
use App\Commune;
use App\Carrera;
use App\Region;
use App\Staff;
use App\Disponibilidad;
use App\Event;
use App\Eventtype;
use App\Establishment;
use App\Jornada;
use App\Turn;
use App\Turndetail;

class PdfGenerateController extends Controller
{

    public function pdfview(Request $request){

        $user = DB::table("users")->get();

        view()->share('users',$user);
        if($request->has('download'))
        {

          $pdf = PDF::loadView('pdfview');

          return $pdf->download('userlist.pdf');

        }
        return view('pdfview');

    }

    public function pdfview2(Request $request)
    {

      if (Auth::user()->id_rol == 1){
        $expos = Exhibitor::all();
        $pago =array();
        $element = 0;
        $medio = array();
        $completo = array();
        $tarde = array();
        $total = array();
        $canmedio=array();
        $cancompleto=array();
        $cantarde=array();
        $fechadiacompleto=array();
        $fechamediodia=array();
        $fechatarde=array();

        foreach ($expos as $expo) {
            $cmd = 0;
            $md = 0;
            $cdc = 0;
            $dc = 0;
            $cd18=0;
            $d18 = 0;
            $tot = 0;
            $fecdc="";
            $fecmd="";
            $fecd18="";
            $turndetail = Turndetail::where('id_expositor','=',$expo['id'])->where('asistencia','=','1')->where('pagado','=','0')->get();


            foreach ($turndetail as $dt ) {
                $turn = Turn::where('id','=',$dt['id_turno'])->get();
                foreach ($turn as $tr) {
                  $jornada = Jornada::where('id','=',$tr['id_jornada'])->get();
                  $evento = Event::where('id','=',$tr['id_evento'])->first();
                  $date = date("m", strtotime($evento['start']));

                  //if($date == $mes){
                  if($jornada[0]['tipo']==1){
                    $md = $md + $jornada[0]['valor'];
                    $cmd= $cmd +1;
                      $date = date("d/m/y", strtotime($evento['start']));
                    $fecmd = $fecmd .$date."-";
                  }
                  if($jornada[0]['tipo']==2){
                    $dc = $dc + $jornada[0]['valor'];
                    $cdc = $cdc +1 ;
                    $date = date("d/m/y", strtotime($evento['start']));
                    $fecdc = $fecdc .$date."-";
                  }
                  if($jornada[0]['tipo']==3){
                    $d18 = $d18 + $jornada[0]['valor'];
                    $cd18 = $cd18 + 1;
                    $date = date("d/m/y", strtotime($evento['start']));
                    $fecd18 = $fecd18 .$date."-";
                  }
                }

                //}
            }
            if($cmd!=0 || $cd18 !=0 || $cdc !=0 ){
            $element = $element +1 ;
            $tot = $md + $dc + $d18;
            array_push($pago,$expo);
            array_push($medio,$md);
            array_push($completo,$dc);
            array_push($tarde,$d18);
            array_push($canmedio,$cmd);
            array_push($cancompleto,$cdc);
            array_push($cantarde,$cd18);
            array_push($fechamediodia,$fecmd);
            array_push($fechadiacompleto,$fecdc);
            array_push($fechatarde,$fecd18);
            array_push($total,$tot);
          }
        }
    }

    return view('pdfview')->share('element',$element);view()->share('expos','pago','medio','completo','tarde','canmedio','cantarde','cancompleto','total','fechamediodia','fechadiacompleto','fechatarde',
    $element ,$expos,$pago,$medio,$completo,$tarde,$canmedio,$cancompleto,$cantarde,$fechamediodia,$fechadiacompleto,$fechatarde,$total);

    if($request->has('download'))
    {
      $pdf = PDF::loadView('pdfview');

      return $pdf->download('userlist.pdf');
    }
    return view('pdfview');
  }
}
