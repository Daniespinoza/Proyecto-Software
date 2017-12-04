@extends('layouts.master')


@section('title','evento')
@section('ventana','crear evento')
@section('contenido')
<div class="page-content">
<div class="page-header">
  <h1>Formulario de ingreso de nuevo evento</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form name="create" class="form-horizontal "  method="post" action="{{url('eventos')}}">
{{csrf_field()}}
    <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Nombre de evento</label>
        <div class="col-md-4">
          <input class="form-control" type="text" name = "nombre"required/>
        </div>
    </div>



    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Tipo de evento </label>
          <div class="col-md-4">
            <select class="" id="tipo" name="tipo_evento" required >

            <option class="" name="tipo_evento" required>-- Seleccione un tipo de evento --</option>
              @foreach($evento as $eve)
              <option value="{{$eve['id']}}">{{$eve['subtipo']}}</option>
              @endforeach

            </select>
            <label>Otro</label>
             <input type="checkbox" name="otros" onclick="document.create.tipo.disabled = true; document.create.tip.disabled = false; tip.disabled = !this.checked; tipo.disabled = this.checked;"/>          </div>
             <input type="text" name="tipo_evento" id="tip" value="" disabled>
    </div>


    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Establecimiento</label>
          <div class="col-md-4">
            <div class="input-group">
            <select class="" id="esta" name="esta" required >

            <option class="" name="tipo_esta" required>-- Seleccione un Establecimiento --</option>
              @foreach($establecimientos as $estab)
              <option value="{{$estab['id']}}">{{$estab['nombre_establecimiento']}}</option>
              @endforeach
            </select>
             <input type="button" class="btn btn-warning" onclick=" location.href='{{action('EstablecimientosController@create')}}' " value="Agregar nuevo" name="boton" />
           </div>
          </div>

          </div>

    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Lugar de evento</label>
        <div class="col-md-4">
          <input class="form-control" type="text" name = "direccion" required/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Descripción</label>
        <div class="col-md-4">
          <input class="form-control" type="text" name = "descripcion" required/>
        </div>
    </div>

      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Fecha</label>
          <div class="col-md-4">
  <input type="datetime-local" name="fecha" value="" required>

        </div>
        </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right">Cupos requeridos</label>
        <div class="col-md-4">
          <input type="number" name="cupos" min="1" value="" required>
      </div>
      <br><br><br>
      <div class="col-md-6"></div>
      <input type="submit" class="btn btn-primary">
      </div>



    </div>


    </div>

</form>
</div>

@endsection
