<!DOCTYPE html>
<html>
  <head> 
    <title>Tienda</title>
        <meta charset=”utf-8”/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link   rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/proyecto.css">
        <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container">
      <nav class="navbar bg-dark navbar-dark navbar-expand-sm fixed-top">
      <div class="container-fluid navbar-header">
        <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="usu.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Productosusu.php">Productos</a>
        <li class="nav-item active">
                    <a class="nav-link" href="mostrarCarro.php" >Carrito(<?php
                        echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>)</a>
                </>
        </ul>
        </div>
        <ul class="nav navbar-nav navbar-right">
        <li >
          <a class="nav-link glyphicon glyphicon-user btn btn-primary m-1" href="../sesion/cerrarsesion.php">Cerrar sesión</a>
        </li>
      </ul>
    </div>
    </nav>
  <br>
  <br>