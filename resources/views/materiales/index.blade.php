@extends('layouts.master')

@section('title','Materiales')
@section('ventana','Ver Materiales')
@section('contenido')
<div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" >Nombre</th>
        <th class="text-center" >Cantidad</th>
        @if(Auth::user()->id_rol == 1 ||Auth::user()->id_rol == 2)
        <th class="text-center"  class="text-center"  colspan="2">Acciones</th>
        @endif
      </tr>
    </thead>
    <tbody>


      @foreach($materiales as $post)
      <tr>

        @if($post['activo'] == true)

        <td class="text-center" >{{$post['descripcion']}}</td>
        <td class="text-center" >{{$post['stock_total']}}</td>
        @if(Auth::user()->id_rol == 1 ||Auth::user()->id_rol == 2)
        <td class="text-center" ><a href="{{action('MaterialesController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td class="text-center" ><form action="{{action('MaterialesController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        @endif
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
