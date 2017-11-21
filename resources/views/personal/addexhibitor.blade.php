@extends('layouts.master')

@section('title','Expositores')
@section('ventana','Agregar Expositor')
@section('contenido')
<div class="page-content">
<div class="page-header">
  <h1>Formulario Inscripción de Expositor</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form class="form-horizontal ingresar_solicitud" target="_blank" method="post" action="./">

<div class="form-group">
     <label class="col-md-3 control-label no-padding-right" for="form-field-1"> Rut </label>
     <div class="col-md-4">
        <input class="form-control" type="text"/>
      </div>
    </div>
    <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Primer Nombre </label>
        <div class="col-md-4">
          <input class="form-control" type="text"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Segundo Nombre </label>
          <div class="col-md-4">
            <input class="form-control" type="text"/>
          </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Apellido Paterno </label>
          <div class="col-md-4">
              <input class="form-control" type="text" id="rbd" />
          </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Apellido Materno </label>
        <div class="col-md-4">
            <input class="form-control" type="text" id="rbd" />
        </div>
    </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Comuna</label>
          <div class="col-md-4">
          <select class="form-control" name="comuna" id="id_comuna">
            <option class="form-control" value="">--Selecione un comuna--</option>
            {{-- @foreach(comunas as comuna)
              <option class="form-control" value="{{ $comuna['id']}}"> $comuna['nombre']</option>
            @endforeach --}}
          <input  type="checkbox" name="si_otra" value="si" />otra
        </select>
        </div>
</div>
<div class="form-group">
<label class="col-md-3 control-label no-padding-right"> Dirección</label>
<div class="col-md-4">
<input type="text" id="rbd" class="form-control" />
</div>
</div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right">Teléfono</label>
          <div class="col-md-4">
          <input type="number" class="form-control" />
      </div>
    </div>
      <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Correo </label>
        <div class="col-md-4">
          <input type="email" class="form-control" />
        </div>
      </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Contraseña</label>
<div class="col-md-4">
          <input class="form-control" type="password" id="rbd" />
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

</form>
</div>
</div>
</div>


@endsection
