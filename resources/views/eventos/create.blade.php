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
<form class="form-horizontal "  method="post" action="{{url('eventos')}}">
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
            <select class="" name="tipo_evento" required>

            <option class="" name="tipo_evento" required>-- Seleccione un tipo de evento --</option>
              @foreach($evento as $eve)
              <option value="{{$eve['id']}}">{{$eve['subtipo']}}</option>
              @endforeach

            </select>
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
<input type="date" name="fecha" value="" required>

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
