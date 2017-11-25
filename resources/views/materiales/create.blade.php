@extends('layouts.master')

@section('title','Materiales')
@section('ventana','Agregar Material')
@section('contenido')
<div class="page-content">
<div class="page-header">
  <h1>Formulario Inscripción Materiales</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form class="form-horizontal ingresar_solicitud" method="post" action="{{url('materiales')}}">
<div class="form-group">
  {{csrf_field()}}
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Nombre </label>
        <div class="col-md-4">
          <input class="form-control" type="text" name="nombre" />
        </div>
    </div>
      <label class="col-md-3 control-label no-padding-right" for="form-field-1"> Cantidad </label>
        <div class="col-md-4">
          <input class="form-control" type="number" name="cantidad" />
        </div>
      </div>

      <div class="col-md-3 control-label no-padding-right">

      <!--button type="" class="btn btn-tomato">
        <i class="ace-icon bigger-110">
          Agregar
      </i>
    </button-->
    <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>

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