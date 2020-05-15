
<html>
<head>
	<title> Ingresar Producto</title>
	<link rel="stylesheet" type="text/css" href="crud.css">
</head>
<header>
<h3>Ingresa los datos del Producto</h3>
</header>
<form action='administrar.php' method='post'>
	<table>
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='titulo'></td>
		</tr>
		<tr>
			<td>Precio:</td>
			<td><input type='text' name='autor' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="admin.php">Volver</a>
</form>
 
</html>