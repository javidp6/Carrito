<?php
     require_once('crud.php');
     require_once('crudproductos.php');
    $crud=new CrudProducto();
    $producto= new Producto();
    $listaProductos=$crud->mostrar();

    if(isset($_POST['actualizar'])){
		$producto->setId($_POST['id']);
		$producto->setNombre($_POST['nombre']);
		$producto->setDescripcion($_POST['descripcion']);
        $producto->setPrecio($_POST['precio']);
        $producto->setImagen($_POST['imagen']);
		$crud->actualizar($producto);
        header('Location: admin.php');

	}elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);	
        header('Location: admin.php');

	}elseif($_GET['accion']=='a'){
        header('Location: admin.php');
    }
?>