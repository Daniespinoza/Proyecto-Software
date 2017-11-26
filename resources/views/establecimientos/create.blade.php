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
<form class="form-horizontal" method="post" action="{{url('establecimientos')}}">
{{csrf_field()}}
<div class="form-group">
     <label class="col-md-3 control-label no-padding-right" for="form-field-1"> RBD </label>
     <div class="col-md-4">
        <input class="form-control" type="number" name="rbd" required/>
      </div>
    </div>
    <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Nombre </label>
          <div class="col-md-4">
          <input class="form-control" type="text" name="nombre" required/>
        </div>
      </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Comuna</label>
          <div class="col-md-4">

          <select class="form-control" name="comuna" required>
            <option class="form-control" value="">-- Selecione una comuna --</option>
            @foreach($comunas as $comuna)
              <option class="form-control" value="{{$comuna['id']}}"> {{$comuna['nombre']}}</option>
            @endforeach
          <!--input  type="checkbox" name="si_otra" value="si" /-->
        </select>
        </div>

</div>
<div class="form-group">
<label class="col-md-3 control-label no-padding-right"> Dirección</label>
<div class="col-md-4">
<input type="text" name="direccion" class="form-control" required/>
</div>
</div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Depto</label>
          <div class="col-md-4">
            <select name="depto" class="form-control" required>
            <option value="">-- Selecione un departamento --</option>
            @foreach($deptos as $depto)
              <option class="form-control" value="{{$depto['id']}}"> {{$depto['descripcion']}}</option>
            @endforeach
          </select>
      </div>
    </div>
      <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Tipo </label>
        <div class="col-md-4">
          <select class="form-control" name="tipo" required>
            <option value="">-- Selecione un tipo de Establecimiento --</option>
            @foreach($tipos as $tipo)
              <option class="form-control" value="{{$tipo['id']}}"> {{$tipo['tipo']}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Encargado</label>
<div class="col-md-4">
          <input class="form-control" type="text" name="encargado" required/>
      </div>
    </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Cargo</label>
          <div class="col-md-4">
          <select class="form-control" name="cargo" required>
            <option value="">-- Seleccione cargo del personal --</option>
            @foreach($cargos as $cargo)
              <option class="form-control" value="{{$cargo['id']}}"> {{$cargo['descripcion']}}</option>
            @endforeach
          </select>
      </div></div>

      <div class="form-group">
           <label class="col-md-3 control-label no-padding-right"> Correo</label>
            <div class="col-md-4">
          <input type="email" name="correo" class="form-control" />
      </div>
    </div>

      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Teléfono</label>
          <div class="col-md-4">
          <input type="integer" name="fono" class="form-control" />
      </div>
    </div>
    <div class="form-group">
         <label class="col-md-3 control-label no-padding-right"> PACE</label>
          <div class="col-md-4">
        <input type="text" name="pace" class="form-control" />
    </div>

  </div>
  <div class="col-md-2"></div>
  <input type="submit" class="btn btn-primary">
</div>

  </div>

</form>
</div>
</div>
</div>


@endsection
