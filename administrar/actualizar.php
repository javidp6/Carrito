<?php
    require_once('crud.php');
    require_once('crudproductos.php');
    $crud=new CrudProducto();
    $producto= new Producto();
	$producto=$crud->obtenerProducto($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Libro</title>
	<link rel="stylesheet" type="text/css" href="crud.css">
</head>
<body>
	<form action='administrar.php' method='post'>
		<h3>Actualizar Productos</h3>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $producto->getId()?>'>
			<td>Nombre:</td>
			<td> <input type='text' name='titulo' value='<?php echo $producto->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Precio:</td>
			<td><input type='text' name='precio' class="form-control" value='<?php echo $producto->getPrecio() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="admin.php">Volver</a>
</form>
</body>
</html>