@extends('layouts.master')

@section('title','Expositores')
@section('ventana','Ver Expositores')
@section('contenido')
<div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" >Nombre</th>
        <th class="text-center" >Apellido Paterno</th>
        <th class="text-center" >Apellido Materno</th>
        <th class="text-center" >Género</th>
        <th class="text-center" >RUT</th>
        <th class="text-center" >Carrera</th>
        <th class="text-center" >Facultad</th>
        <th class="text-center" >Correo</th>
        <th class="text-center" >Celular</th>
        <th class="text-center" >Dirección</th>
        <th class="text-center" >Comuna</th>
        <th class="text-center"  colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>

      @foreach($expositores as $post)
      <tr>
        @if($post['activo'] == true)
        <td class="text-center" >{{$post['alu_nombre']}}</td>
        <td class="text-center" >{{$post['alu_apellido_paterno']}}</td>
        <td class="text-center" >{{$post['alu_apellido_materno']}}</td>
        <td class="text-center" >{{$post['genero']}}</td>
        <td class="text-center" >{{$post['alu_rut']}}</td>
        <td class="text-center" >{{$post['id_carrera']}}</td>
        @foreach($carreras as $car)
          @if($car['nombre'] == $post['id_carrera'])
            @foreach($facultades as $fac)
              @if($fac['id'] == $car['id_facultad'])
                <td class="text-center" >{{$fac['nombre']}}</td>
              @endif
            @endforeach
          @endif
        @endforeach
        <td class="text-center" >{{$post['alu_email']}}</td>
        <td class="text-center" >{{$post['alu_celular']}}</td>
        <td class="text-center" >{{$post['direccion']}}</td>
        <td class="text-center" >{{$post['id_comuna']}}</td>
        <td class="text-center" ><a href="{{action('ExpositoresController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td class="text-center" ><form action="{{action('ExpositoresController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
