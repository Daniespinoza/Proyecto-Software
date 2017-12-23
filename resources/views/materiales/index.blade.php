@extends('layouts.master')

@section('title','Materiales')
@section('ventana','Ver Materiales')
@section('contenido')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<div class="page-header">
  <h1>Materiales Inscritos</h1>
</div>


<div style="overflow-x:auto;">
<table id="example" class="display" cellspacing="0" width="100%">
      <thead>
          <tr>
              <th class="text-center">Nombre</th>
              <th class="text-center">Cantidad</th>
              <th class="text-center">Fecha de ingreso</th>
              <th class="text-center">Última modificación</th>
              @if(Auth::user()->id_rol != 4)
              <th class="text-right">Acciones</th>
              <th></th>
              @endif
          </tr>
      </thead>
      <tfoot>
          <tr>
            <th class="text-center">Nombre</th>
            <th class="text-center">Cantidad</th>
            <th class="text-center">Fecha de ingreso</th>
            <th class="text-center">Última modificación</th>
            @if(Auth::user()->id_rol != 4)
            <th class="text-right">Acciones</th>
            <th></th>
            @endif
        </tr>
          </tr>
      </tfoot>
      <tbody>
        @foreach($materiales as $post)
          <tr>
            @if($post['activo'] == true)
              <td class="text-center">{{$post['descripcion']}}</td>

              <td class="text-center">{{$post['stock_total']}}</td>
              <td class="text-center">{{\Carbon\Carbon::parse($post['created_at'])->format('d/m/Y')}}</td>
              <td class="text-center">{{\Carbon\Carbon::parse($post['updated_at'])->format('d/m/Y')}}</td>
              @if(Auth::user()->id_rol != 4)
              <td class="text-center" ><a href="{{action('MaterialesController@edit', $post['id'])}}" class="btn btn-success"><strong>Editar</strong></a></td>
              <td class="text-center" ><form action="{{action('MaterialesController@destroy', $post['id'])}}" method="post">
                  {{csrf_field()}}
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit"><strong>Eliminar</strong></button>
                  </form>
              </td>
              @endif
              @endif
          </tr>
        @endforeach
      </tbody>
  </table>

</div>




<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.0/js/buttons.html5.min.js"> </script>
<script>


$(document).ready(function() {
  $('#example').DataTable( {
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
       buttons: [
           {
               extend: 'pdfHtml5',
               pageSize:'LEGAL',
               exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }

           }
       ],
      "createdRow": function( row, data, dataIndex){
                if( data[1] < 20 ){
                    $(row).addClass('red');
                }
            }
  } );
} );
</script>

@endsection
