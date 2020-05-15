<?php
	session_start();

    include 'global/config.php';
	include 'global/conexion.php';
?>

<?php   


if(isset($_GET['cerrar_sesion'])){
	session_unset(); 

	// destroy the session 
	session_destroy(); 
}

if(isset($_SESSION['rol'])){
	switch($_SESSION['rol']){
		case 1:
			header('location: ./administrar/admin.php');
		break;

		case 2:
		header('location: ./usuarios/usu.php');
		break;

		default:
	}
}

if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$Database = Database::connect();
	$query = $Database->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
	$query->execute(['username' => $username, 'password' => $password]);

	$row = $query->fetch(PDO::FETCH_NUM);
	
	if($row == true){
		$rol = $row[3];
		
		$_SESSION['rol'] = $rol;
		switch($rol){
			case 1:
			header('location: ./administrar/admin.php');
			break;

			case 2:
			header('location: ./usuarios/usu.php');
			break;

			default:
		}
	}else{
		// no existe el usuario
		echo "Nombre de usuario o contraseña incorrecto";
	}
	

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="username"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
    </form>
</body>
</html>