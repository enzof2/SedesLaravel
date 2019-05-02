<!DOCTYPE html>
<html>
<head>
	<h1>Listado</h1>
</head>
<style type="text/css">
	table,th,td{
		border:2px solid orange;
		border-collapse: collapse;
	}
</style>
<body>
	<table>
		<tr>
			<td> Nombre: </td>
			<td> Apellido: </td>
			<td> DNI: </td>
		</tr>
	@foreach($listado as$l)
	<tr>
		<td>{{$l->name}}</td>
		<td>{{$l->lastname}}</td>
		<td>{{$l->dni}}</td>
	</tr>
	@endforeach	
	</table>

</body>
</html>