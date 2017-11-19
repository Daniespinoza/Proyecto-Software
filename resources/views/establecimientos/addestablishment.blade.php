@extends('layouts.master')

@section('title','Establecimientos')
@section('ventana','Agregar Establecimiento')
@section('contenido')

<form class="" method="post">

  <div class="form-group">
      <div >
        <label> RBD </label>
        <input type="number" id="rbd" /> <br><br />
      </div>
      <div >
          <label>Nombre </label>
          <input type="text" id="rbd" /> <br><br />
      </div>
      <div >
          <label>Comuna</label>
          <select class="" name="comuna" id="id_comuna">
            <option value="">--Selecione un comuna--</option>
            {{-- @foreach(comunas as comuna)
              <option value="{{ $comuna['id']}}"> $comuna['nombre']</option>
            @endforeach --}}
          </select>
          <input type="checkbox" name="si_otra" value="si" />otra

      </div>
      <div>
          <br> <label>Direccion</label>
          <input type="text" id="rbd" /> <br><br />
      </div>
      <div>
          <label>Depto</label>
          <select class= name="depto">
            <option value="">--Selecione un departamento--</option>
          </select>
      </div>
      <div>
          <br> <label>Tipo </label>
          <select class= name="tip">
            <option value="">--Selecione un tipo de Establecimiento</option>
          </select>
      </div>
      <div>
        <br>  <label>Encargado</label>
          <input type="text" id="rbd" /> <br><br />
      </div>
      <div>
          <label>Cargo</label>
          <select class="" name="cargo">
            <option value="">Seleccione cargo del personal</option>
          </select>
      </div>
      <div alig=left>
          <br> <label>Correo</label>
          <input type="email" id="rbd" /> <br><br />
      </div>
      <div>
          <label>Telefono</label>
          <input type="integer" id="rbd" /> <br><br />
      </div>
      <div>
          <label>PACE</label>
          <input type="checkbox" name="pace" value="1" />Si
          <input type="checkbox" name="pace" value="2" />No<br /><br />
      </div>

      <div class="button">
        <button type="">Agregar</button>
      </div>

</div>


</form>



@endsection
