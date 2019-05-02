<!DOCTYPE html>
<html>
<head>
	<h1>Ingresar</h1>
</head>
<body>
	<form method='post' action='persona'>
		@csrf
		Nombre:
		<br>
		<input type="text" name="name">
		<br>
		Apellido:
		<br>
  		<input type="text" name="lastname">
  		<br>
  		DNI:
  		<br>
  		<input type="int" name="dni">
  		<br>
  		<input type="submit" name="submit">
  		<a href="listado"><input type="button" value="Listado"></a>

	</form>
	<input type="int" name="busqdni">
	<input type="button" value="Buscar">
</body>
</html>