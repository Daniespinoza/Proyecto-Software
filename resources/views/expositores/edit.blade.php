@extends('layouts.master')

@section('title','Expositores')
@section('ventana','Actualizar Expositor')
@section('contenido')

<div class="page-content">
<div class="page-header">
  <h1>Formulario De Actualización de Expositor</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" action="{{action('ExpositoresController@update',$id)}}">
{{csrf_field()}}
<div class="form-group">
  <input name="_method" type="hidden" value="PATCH"/>
     <label class="col-md-3 control-label no-padding-right" for="form-field-1"> Rut </label>
     <div class="col-md-4">
        <input class="form-control" type="text" name="rut" value="{{$expo->alu_rut}}" required />
      </div>
    </div>
    <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Nombre </label>
        <div class="col-md-4">
          <input class="form-control" type="text" name = "nombre" value="{{$expo->alu_nombre}}" required />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Apellido Paterno </label>
          <div class="col-md-4">
              <input class="form-control" type="text" name="ap_pat" value="{{$expo->alu_apellido_paterno}}" required/>
          </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Apellido Materno </label>
        <div class="col-md-4">
            <input class="form-control" type="text" name="ap_mat" value="{{$expo->alu_apellido_materno}}"required/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Género</label>
        <div class="col-md-4">
          <select class="form-control" name="genero" value="{{$expo->genero}}"required>

            <option value="{{$sex}}">{{ $sex }}</option>
            @if( $sex == "Femenino" )
            <option value="Masculino">Masculino</option>
            @endif
            @if( $sex == "Masculino" )
            <option value="Femenino">Femenino</option>
            @endif
        </select>

      </div>
      </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Región</label>
        <div class="col-md-4">
          <select class="form-control" name="regiones" required>
            <option value="{{$regi[0]['id']}}">{{$regi[0]['nombre']}}</option>
        @foreach ($regions as $region)
            @if($region->id !=$regi[0]['id'] )
            <option value="{{$region['id']}}">{{$region['nombre']}}</option>
            @endif
            @endforeach
        </select>
      </div>
      </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Comuna</label>
          <div class="col-md-4">
            <select class="form-control" name="comuna" required>
              <option value="{{$comm[0]['id']}}">{{$comm[0]['nombre']}}</option>

            @foreach ($commun as $comunas)
              @if($comunas->id !=$comm[0]['id'] )
              <option value="{{$comunas['id']}}">{{$comunas['nombre']}}</option>
              @endif
          @endforeach
          </select>
        </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label no-padding-right"> Dirección</label>
  <div class="col-md-4">
    <input type="text" name="direccion" class="form-control" value="{{$expo->direccion}}"required/>
  </div>
</div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right">Teléfono</label>
          <div class="col-md-4">
          <input type="number" class="form-control" pattern="[0-9]" name = "telefono" value="{{$expo->alu_celular}}" required/>
      </div>
    </div>
  <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Carrera</label>
        <div class="col-md-4">
          <select class="form-control" name="carrera" required>
              <option value="{{$comm[0]['id']}}">{{$carres[0]['nombre']}}</option>

          @foreach ($carreras as $carrera)
          @if($carrera->id !=$carres[0]['id'] )
            <option value="{{$carrera['id']}}">{{$carrera['nombre']}}</option>
          @endif
        @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Semestre Actual </label>
      <div class="col-md-4">
        <input type="number" class="form-control" pattern="[0-9]" name = "sem" value="{{$expo->semestre_actual}}" required/>
      </div>
    </div>
      <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Correo </label>
        <div class="col-md-4">
          <input type="email" class="form-control"  name = "mail" value="{{$expo->alu_email}}"required/>
        </div>
        <div class="col-md-3 control-label no-padding-right">

        </div>
      </div>
      <div class="col-md-6"></div>
      <button type="submit" class="btn btn-primary">Actualizar</button>


    </div>


    </div>

</form>
</div>


@endsection
