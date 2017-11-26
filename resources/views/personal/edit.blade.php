@extends('layouts.master')

@section('title','Personal')
@section('ventana','Actualizar Personal')
@section('contenido')
<div class="page-content">
<div class="page-header">
  <h1>Formulario Actualización de Personal</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" action="{{action('PersonalController@update',$id)}}">
{{csrf_field()}}
<div class="form-group">
  <input name="_method" type="hidden" value="PATCH"/>

     <label class="col-md-3 control-label no-padding-right" for="form-field-1"> Nombre </label>
     <div class="col-md-4">
        <input class="form-control" type="text" name="nombre" value="{{$personal->nombre}}"/>
      </div>
    </div>
    <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Apellido Paterno </label>
          <div class="col-md-4">
          <input class="form-control" type="text" name="ap_pat" value="{{$personal->apellido_paterno}}"/>
        </div>
      </div>

      <div class="form-group">
            <label class="col-md-3 control-label no-padding-right"> Apellido Materno </label>
            <div class="col-md-4">
            <input class="form-control" type="text" name="ap_mat" value="{{$personal->apellido_materno}}"/>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> RUT</label>
            <div class="col-md-4">
                <input type="text" name="rut" class="form-control" value="{{$personal->rut}}"/>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> RUN</label>
            <div class="col-md-4">
                <input type="number" name="run" class="form-control" value="{{$personal->run}}"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label no-padding-right"> Permisos</label>
            <div class="col-md-4">

            <select class="form-control" name="rol" >
              <option class="form-control" value="{{$personal->id_rol}}">{{($roll[0]['permiso'])}}</option>

              @foreach($roles as $rol)
                @if($rol->permiso != $roll[0]['permiso'])
                <option class="form-control" value="{{ $rol['id']}}"> {{$rol['permiso']}}</option>
                @endif
              @endforeach
          </select>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Correo</label>
            <div class="col-md-4">
                <input type="text" name="correo" class="form-control" value="{{$personal->correo}}"/>
            </div>
        </div>

    </div>
    <div class="col-md-6"></div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
  </div>

</form>
</div>
</div>
</div>


@endsection
