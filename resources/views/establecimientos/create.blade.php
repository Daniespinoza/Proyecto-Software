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
        <input class="form-control" pattern="[0-9]" min="0" type="number" name="rbd" value="0000" required/>
      </div>
    </div>
    <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Nombre </label>
          <div class="col-md-4">
          <input class="form-control" type="text" name="nombre" required/>
        </div>
      </div>

      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Región</label>
          <div class="col-md-4">
            <select class="form-control" name="regiones" onchange="load(this.value)" required>
              <option value="">-- Seleccione una región --</option>
            @foreach ($regions as $region)
              <option value="{{$region['id']}}">{{$region['nombre']}}</option>
          @endforeach
          </select>
        </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label no-padding-right"> Comuna</label>
            <div class="col-md-4">
              <div id="demo">
              <select class="form-control" name="comuna" required>
                <option value="">-- Seleccione una Comuna --</option>
              </select>
        </div>
          </div>
  </div>


<div class="form-group">
<label class="col-md-3 control-label no-padding-right"> Dirección</label>
<div class="col-md-4">
<input type="text" name="direccion" placeholder="dirección ejemplo #334" class="form-control" required/>
</div>
</div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Depto</label>
          <div class="col-md-4">
            <select name="depto" class="form-control" required>
            <option value="">-- Seleccione un departamento --</option>
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
            <option value="">-- Seleccione un tipo de Establecimiento --</option>
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
          <input type="email" name="correo" placeholder="ejemplo@utem.cl" class="form-control" />
      </div>
    </div>

      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Teléfono</label>
          <div class="col-md-4">
          <input type="number" pattern="[0-9]" name="fono" placeholder="56999887766 ó 2299988877" class="form-control" />
      </div>
    </div>
    <div class="form-group">
         <label class="col-md-3 control-label no-padding-right"> PACE</label>
          <div class="col-md-4">
        <input type="text" name="pace" class="form-control" />
    </div>

  </div>
  <div class="col-md-6"></div>
  <input type="submit" class="btn btn-primary">
</div>

  </div>

</form>
</div>

<script type="text/javascript">
function load(x) {
  $.getJSON( "/comuna", function( data ) {
    $( "#demo" ).empty();
    var items = [];
  items.push('<option value="">-- Seleccione una Comuna --</option>');
  $.each( data, function( key, val ) {
    if(val.id_region==x){items.push( "<option value='" + val.id + "'>" + val.nombre + "</option>" );}
  });
  $( "<select/>", {
    "class": "form-control",
    "name": "comuna",
    html: items.join( "" )
  }).appendTo( "#demo" );
  });
}
</script>



@endsection
