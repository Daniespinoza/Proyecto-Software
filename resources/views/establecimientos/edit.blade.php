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
<form class="form-horizontal" method="post" action="{{action('EstablecimientosController@update',$id)}}">
{{csrf_field()}}
  <div class="form-group">
    <input name="_method" type="hidden" value="PATCH"/>
      <label class="col-md-3 control-label no-padding-right" for="form-field-1"> RBD </label>
        <div class="col-md-4">
          <input class="form-control" type="number" name="rbd" value="{{$estab->rbd}}" required/>
        </div>
  </div>
  <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Nombre </label>
        <div class="col-md-4">
          <input class="form-control" type="text" name="nombre" value="{{$estab->nombre_establecimiento}}" required/>
        </div>
  </div>
  <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Comuna</label>
        <div class="col-md-4">
          <select class="form-control" name="comuna"  required>
            <option class="form-control" value="{{$estab->id_comuna}}">{{$com[0]['nombre']}}</option>
            @foreach($comunas as $comuna)
              @if($comuna->nombre != $com[0]['nombre'])
              <option class="form-control" value="{{$comuna['id']}}"> {{$comuna['nombre']}}</option>
              @endif
            @endforeach
          <!--input  type="checkbox" name="si_otra" value="si" /-->
          </select>
        </div>
  </div>

  <div class="form-group">
    <label class="col-md-3 control-label no-padding-right"> Dirección</label>
      <div class="col-md-4">
        <input type="text" name="direccion" class="form-control" value="{{$estab->direccion}}" required/>
      </div>
  </div>

  <div class="form-group">
    <label class="col-md-3 control-label no-padding-right"> Depto</label>
        <div class="col-md-4">
          <select name="depto" class="form-control" required>
            <option value="{{$estab->id_depto}}">{{$dept[0]['descripcion']}}</option>
            @foreach($deptos as $depto)
              @if($depto->descripcion != $dept[0]['descripcion'])
              <option class="form-control" value="{{$depto['id']}}"> {{$depto['descripcion']}}</option>
              @endif
            @endforeach
          </select>
        </div>
  </div>

    <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Tipo </label>
      <div class="col-md-4">
        <select class="form-control" name="tipo" required>
          <option value="{{$estab->id_tipo_establecimiento}}">{{$tip[0]['tipo']}}</option>
          @foreach($tipos as $tipo)
            @if($tipo->tipo != $tip[0]['tipo'])
            <option class="form-control" value="{{$tipo['id']}}"> {{$tipo['tipo']}}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Encargado</label>
        <div class="col-md-4">
          <input class="form-control" type="text" name="encargado" value="{{$estab->encargado}}" required/>
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Cargo</label>
        <div class="col-md-4">
          <select class="form-control" name="cargo" required>
            <option value="{{$estab->id_cargo}}">{{$carg[0]['descripcion']}}</option>
            @foreach($cargos as $cargo)
              @if($cargo->descripcion != $carg[0]['descripcion'])
              <option class="form-control" value="{{$cargo['id']}}"> {{$cargo['descripcion']}}</option>
              @endif
            @endforeach
          </select>
        </div>
    </div>

      <div class="form-group">
           <label class="col-md-3 control-label no-padding-right"> Correo</label>
            <div class="col-md-4">
          <input type="email" name="correo" class="form-control" value="{{$estab->correo}}" />
      </div>
    </div>

      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Teléfono</label>
          <div class="col-md-4">
          <input type="integer" name="fono" class="form-control" value="{{$estab->telefono}}" />
      </div>
    </div>

    <div class="form-group">
       <label class="col-md-3 control-label no-padding-right"> PACE</label>
          <div class="col-md-4">
            <input type="text" name="pace" class="form-control" value="{{$estab->pace}}"/>
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
