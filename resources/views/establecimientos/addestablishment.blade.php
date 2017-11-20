@extends('layouts.master')

@section('title','Establecimientos')
@section('ventana','Agregar Establecimiento')
@section('contenido')
<div class="page-content">
<div class="page-header">
  <h1>Formulario Inscripción de Establecimiento</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form class="form-horizontal ingresar_solicitud" target="_blank" method="post" action="/certificados_2/guardar_solicitud">

<div class="form-group">
     <label class="col-md-3 control-label no-padding-right" for="form-field-1"> RBD </label>
     <div class="col-md-4">
        <input class="form-control" type="number" id="rbd" />
      </div>
    </div>
    <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Nombre </label>
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
          <label class="col-md-3 control-label no-padding-right"> Depto</label>
          <div class="col-md-4">
            <select name="depto" class="form-control">
            <option value="">--Selecione un departamento--</option>
          </select>
      </div>
    </div>
      <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Tipo </label>
        <div class="col-md-4">
          <select class="form-control" name="tip">
            <option value="">--Selecione un tipo de Establecimiento</option>
          </select>
        </div>
      </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Encargado</label>
<div class="col-md-4">
          <input class="form-control" type="text" id="rbd" />
      </div>
    </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Cargo</label>
          <div class="col-md-4">
          <select class="form-control" name="cargo">
            <option value="">Seleccione cargo del personal</option>
          </select>
      </div></div>
      <div class="form-group">
           <label class="col-md-3 control-label no-padding-right"> Correo</label>
<div class="col-md-4">
          <input type="email" id="rbd" class="form-control" />
      </div></div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Teléfono</label>
          <div class="col-md-4">
          <input type="integer" id="rbd" class="form-control" />
      </div>
    </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> PACE</label>
          <div class="col-md-4">
          <input type="radio" name="pace" value="1" />Si
          <input  type="radio" name="pace" value="2" />No
      </div>
      <div class="col-md-3 control-label no-padding-right">

      <button type="" class="btn btn-purple">
        <i class="ace-icon bigger-110">
          Agregar
      </i>
      </button>
    </div>
    </div>
    <!--div class="form-group">

    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
<div class="form-control">


      </div>
      </div>
      </div>
    </div-->
</form>
</div>
</div>
</div>


@endsection
