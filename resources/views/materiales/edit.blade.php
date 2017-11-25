@extends('layouts.master')

@section('title','Materiales')
@section('ventana','Actualizar Material')
@section('contenido')
<div class="page-content">
<div class="page-header">
  <h1>Formulario Actualización de Material</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" action="{{action('MaterialesController@update',$id)}}">
<div class="form-group">
  {{csrf_field()}}
    <div class="form-group">
      <input name="_method" type="hidden" value="PATCH"/>
      <label class="col-md-3 control-label no-padding-right"> Nombre </label>
        <div class="col-md-4">
          <input class="form-control" type="text" name="nombre" value="{{$materiales->descripcion}}"/>
        </div>
    </div>
      <label class="col-md-3 control-label no-padding-right" for="form-field-1"> Cantidad </label>
        <div class="col-md-4">
          <input class="form-control" type="number" name="cantidad" value="{{$materiales->stock_total}}"/>
        </div>
      </div>

      <div class="col-md-3 control-label no-padding-right">

    
    <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>

    </div>
    </div>

</form>
</div>
</div>
</div>


@endsection
