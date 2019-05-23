<!DOCTYPE html>
<html>
<head>
	<h1>Listado</h1>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
	<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
<body>
	 <div class="container">
        <h2>Laravel DataTable - Tuts Make</h2>
        <table class="table table-bordered" id="laravel_datatable">
            <thead>
                <tr>
                   <th>Nombre</th>
                   <th>Apellido</th>
                   <th>DNI</th>
                   <th>Telefono</th>
                   <th>Fecha Nacimiento</th>
                </tr>
            </thead>
      	</table>
        </div>
    <script>
   	$(document).ready( function () {
    	$('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('listado') }}",
           columns: [
                    { data: 'name', name: 'name' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'dni', name: 'dni' },
                    { data: 'telf', name: 'telf' },
                    { data: 'fechanac', name: 'fechanac'},
                 ]
        	});
     	});
  	</script>

</body>
</html>