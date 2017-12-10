@extends('layouts.master')

@section('title','Eventos')
@section('ventana','Actualizar Evento')
@section('contenido')

<div class="page-content">
<div class="page-header">
  <h1>Formulario De Actualización de Evento </h1>
</div>
<div class="row">

<div class="col-xs-12">
<form class="form-horizontal" method="post" action="{{action('EventosController@update',$id)}}">
{{csrf_field()}}
  <input name="_method" type="hidden" value="PATCH"/>
  <input name="id_personal" type="hidden" value="{{$personal[0]['id']}}" />
  <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Nombre de evento</label>
      <div class="col-md-4">
        <input class="form-control" type="text" value="{{$evento['title']}}" name = "title"required/>
      </div>
  </div>



  <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Tipo de evento </label>
        <div class="col-md-4">
          <select class="" name="id_tipo_evento" required value="{{$tipo[0]['id']}}">

          <option class=""  name="id_tipo_evento" required value="{{$tipo[0]['id']}}">{{$tipo_est}}</option>
            @foreach($et as $e)
              @if($e['subtipo'] != $tipo_est)
              <option name="id_tipo_evento" value="{{$e['id']}}">{{$e['subtipo']}}</option>
              @endif
            @endforeach

          </select>
  </div>
</div>

<div class="form-group">
  <div class="col-md-3 control-label no-padding-right">
    <label class="control-label "> Otro</label>
    <input type="checkbox" pattern=".{4,}"name="otros" onclick="document.create.tipo.disabled = true; document.create.tip.disabled = false; tip.disabled = !this.checked; tipo.disabled = this.checked;"/>
  </div>

  <div class="col-md-6">
    <input type="text" name="tipo_evento" id="tip" value="" disabled>
  </div>

  </div>

  <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Establecimiento</label>
        <div class="col-md-4">
          <div class="input-group">
          <select class="" id="id_establecimiento" name="id_establecimiento" required value="{{$establecimiento[0]['id']}}">

          <option class="" name="tipo_esta" value="{{$establecimiento[0]['id']}}"required>{{$id_est}} / {{$nombre_est}}</option>
            @foreach($establecimientos as $estab)
            @if($estab['nombre_establecimiento'] != $nombre_est)
            <option value="{{$estab['id']}}">{{$estab['rbd']}} / {{$estab['nombre_establecimiento']}}</option>
            @endif
            @endforeach
          </select>
           <input type="button" class="btn btn-success" onclick=" location.href='{{action('EstablecimientosController@create')}}' " value="Agregar nuevo" name="boton" />
         </div>
        </div>

        </div>

  <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Lugar de evento</label>
      <div class="col-md-4">
        <input class="form-control" type="text" name = "direccion" value="{{$evento['direccion']}}"required/>
      </div>
  </div>


    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Fecha</label>
        <div class="col-md-4">
          <input type="datetime-local" name="start" value="{{$evento['start']}}" required>
      </div>
    </div>
  <div class="form-group">
    <div class="col-md-3 control-label no-padding-right">

      <label class="">Cupos requeridos</label>
    </div>
      <div class="col-md-7">
        <input type="number" name="cupos"  min="1" pattern="[0-9]" value="{{$evento['cupos']}}"required>
    </div>
  </div>

  <div class="col-md-6"></div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</div>


</form>
</div>




@endsection
