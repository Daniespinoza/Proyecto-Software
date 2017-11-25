@extends('layouts.master')

@section('title','Materiales')
@section('ventana','Ver Materiales')
@section('contenido')
<div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>

      @foreach($materiales as $post)
      <tr>

        @if($post['activo'] == true)
        <td>{{$post['id']}}</td>
        <td>{{$post['descripcion']}}</td>
        <td>{{$post['stock_total']}}</td>
        <td><a href="{{action('MaterialesController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td><form action="{{action('MaterialesController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        <!--td><a href="{{action('MaterialesController@destroy', $post['id'], $post['descripcion'], $post['stock_total'])}}" class="btn btn-danger">Eliminar</a></td-->
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
