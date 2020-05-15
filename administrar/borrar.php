<?php
    include '../global/config.php';
    include '../global/conexion.php';
    include 'carrito.php';
	include '../templates/cabecerad.php';
?>
<br>
<br>
<?php

try {
		$Database = Database::connect();
		$select  = $Database -> prepare( 'select * from productos where nombre=:nombre and precio:precio');
		$select -> bindParam(':nombre ',$nombre);
		$select -> bindParam(':precio',$precio);

		
		
		
		 if($select -> execute()){
			echo "Datos correctos";
		 }else{
			 echo"error introduzca de nuevo";
		 }

		}catch(PDOException $ex) {
			   echo "Ocurrió un error<br>";
			echo $ex->getMessage();
			exit;
			}
}else 
	include 'formulario.php'
?>
<br>
<?php include '../templates/piead.php'; ?>