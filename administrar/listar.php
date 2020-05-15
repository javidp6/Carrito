<?php
	require_once('crud.php');
    require_once('crudproductos.php');
    $crud=new CrudProducto();
    $producto= new Producto();
    $listaProductos=$crud->mostrar();
?>
<html>
<head>
	<title>Mostrar Libros</title>
	<link rel="stylesheet" type="text/css" href="crud.css">
</head>
<body>
	<h3>Productos</h3>
		<table >
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Precio</td>
					<td>Actualizar</td>
					<td>Eliminar</td>
				</tr>	
				</thead>
				<tbody>
				<?php foreach ($listaProductos as $producto) {?>
				<tr>
					<td><?php echo $producto->getNombre() ?></td>
					<td><?php echo $producto->getPrecio() ?></td>
					<td><a href="actualizar.php?id=<?php echo $producto->getId()?>&accion=a">Actualizar</a> </td>
					<td><a href="administrar.php?id=<?php echo $producto->getId()?>&accion=e">Eliminar</a>   </td>
				</tr>
				<?php }?>
			</tbody>
		</table>
		<a href="admin.php">Volver</a>
	</body>
	</html>