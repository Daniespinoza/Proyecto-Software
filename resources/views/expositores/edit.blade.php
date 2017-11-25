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
<form class="form-horizontal "  method="post" action="{{action('ExpositoresController@update',$id)}}">
{{csrf_field()}}

<div class="form-group">
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
        <label class="col-md-3 control-label no-padding-right"> Genero</label>
        <div class="col-md-4">
          <select class="form-control" name="genero" value="{{$expo->genero}}"required>
            <option value="">--Seleccione un Genero--</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>

      </div>
      </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Region</label>
        <div class="col-md-4">
          <select class="form-control" name="regiones" id="selectRegion"required>
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
            <select class="form-control" name="comuna"required>
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
          <input type="number" class="form-control" name = "telefono"value="{{$expo->alu_celular}}" required/>
      </div>
    </div>
  <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Carrera</label>
        <div class="col-md-4">
          <select class="form-control" name="carrera"  value=""required>
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
        <input type="number" class="form-control"  name = "sem" value="{{$expo->semestre_actual}}"required/>
      </div>
    </div>
      <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Correo </label>
        <div class="col-md-4">
          <input type="email" class="form-control"  name = "mail" value="{{$expo->alu_email}}"required/>
        </div>
        <div class="col-md-3 control-label no-padding-right">

        <button type="" class="btn btn-blue">
          <i class="ace-icon bigger-110">
            Agregar
        </i>
        </button>
        </div>
      </div>


    </div>


    </div>

</form>
</div>
</div>
</div>


@endsection
