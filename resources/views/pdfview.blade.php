
@extends('layouts.master')

@section('title','Eventos')
@section('ventana','Listado de Eventos')
@section('contenido')

<!--link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->

<script src="js/jspdf.debug.js"></script>
<script src='js/jquery.min.js'></script>




	<div class="" id="reporte">

<div class="container">

	<table class="table table-bordered">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>hola</th>
			<th>hola</th>
		</thead>
		<tbody>
			@foreach ($users as $key => $value)
			<tr>
				<td>{{ $value->name }}</td>
				<td>{{ $value->email }}</td>
				<td>hola</td>
				<td>hola</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
<input name="Imprimir" onclick="DescargarPDF('reporte','Archivo')"  type="submit" id="Imprimir" value="Descargar PDF" />

<script>
//DescargarPDF('reporte','Archivo');
function DescargarPDF(ContenidoID,nombre) {

	var pdf = new jsPDF('p', 'pt', 'letter');

	html = $('#'+ContenidoID).html();

	specialElementHandlers = {};

	margins = {top: 10,bottom: 20,left: 20,width: 522};

	pdf.fromHTML(html, margins.left, margins.top, {'width': margins.width},function (dispose) {pdf.save(nombre+'.pdf');}, margins);

}
</script>
@endsection
