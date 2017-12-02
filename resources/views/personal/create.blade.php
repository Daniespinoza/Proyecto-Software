@extends('layouts.master')

@section('title','Personal')
@section('ventana','Agregar Personal')
@section('contenido')
<div class="page-content">
<div class="page-header">
  <h1>Formulario Inscripción de Personal</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" action="{{url('personal')}}">
{{csrf_field()}}
<div class="form-group">
     <label class="col-md-3 control-label no-padding-right" for="form-field-1"> Nombre </label>
     <div class="col-md-4">
        <input class="form-control" type="text" name="nombre" required/>
      </div>
    </div>
    <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Apellido Paterno </label>
          <div class="col-md-4">
          <input class="form-control" type="text" name="ap_pat" required/>
        </div>
      </div>

      <div class="form-group">
            <label class="col-md-3 control-label no-padding-right"> Apellido Materno </label>
            <div class="col-md-4">
            <input class="form-control" type="text" name="ap_mat" required/>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> RUT</label>
            <div class="col-md-4">
                <input type="text" name="rut" class="form-control" pattern="([0-9]{2}|[0-9]{1}).[0-9]{3}.[0-9]{3}(-[0-9]{1}|-k|-K)" placeholder="11.111.111-k" required/>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> RUN</label>
            <div class="col-md-4">
                <input type="number" pattern="[0-9]" min="1" max="99999999" name="run" placeholder="rut sin puntos ni dígito verificador" class="form-control" required/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label no-padding-right"> Permisos</label>
            <div class="col-md-4">

            <select class="form-control" name="rol" required>
              <option class="form-control" value="">-- Selecione un Rol --</option>

              @foreach($roles as $rol)
                <option class="form-control" value="{{ $rol['id']}}"> {{$rol['permiso']}}</option>
              @endforeach
          </select>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Correo</label>
            <div class="col-md-4">
                <input type="text" name="correo" class="form-control" placeholder="ejemplo@utem.cl" required />
            </div>
        </div>

    </div>
    <div class="col-md-6"></div>
    <input type="submit" class="btn btn-primary">
  </div>

</form>
</div>



@endsection
