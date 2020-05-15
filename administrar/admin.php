<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }

?>
<?php
    include '../global/config.php';
    include '../global/conexion.php';
    include 'carrito.php';
    include '../templates/cabecerad.php'
?>

<br>
        <?php if($mensaje!="") { ?>
                <div class="alert alert-success">
                    <?php echo $mensaje;?>
                    <a href="mostrarCarro1.php" class="badge badge-success">Ver Carrito</a>
                </div>
        <?php } ?>    
    <br>
    <div class="container ">
      <div class="row ">
        <div class="col">
          <p class="display-4 text-center mibg bg-dark navbar-dark text-white">Algunos de Nuestros Componentes</p>
        </div>
      </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/Graficas/g1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Productosa.php">Graficas</a>
                </h4>
                <p class="card-text"></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/pla.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Productosa.php">Placas base</a>
                </h4>
                <p class="card-text"></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/i9.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Productosa.php">Procesadores</a>
                </h4>
                <p class="card-text"></p>
              </div>
            </div> 
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/ram.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Productosa.php">Memoria Ram</a>
                </h4>
                <p class="card-text"></p>
              </div>
            </div>
            </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/disco.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Productosa.php">Discos Duros</a>
                </h4>
                <p class="card-text"> </p>
              </div>
            </div>
            </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="Productosa.php"><img class="card-img-top" src="../img/portatil.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Portatiles</a>
                </h4>
                <p class="card-text"> </p>
              </div>
            </div>
            </div>

        </div>

      </div>

    </div>

  </div>

      <div class="row">
        <div class="col">
          <p class="display-4 text-center mibg text-white bg-dark navbar-dark">Donde encontrarnos</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4">
          <a class="nav-link glyphicon glyphicon-user btn btn-dark m-1" data-toggle="modal" data-target="#modalmap" href="#">Mapa </a>
    <!-- Modal mapa -->
    <div class="modal fade" id="modalmap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Mapa donde encontrarnos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d116862.54554679655!2d90.40409584970706!3d23.749000170125925!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1550040341458" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>

            <a class="nav-link glyphicon glyphicon-user btn btn-dark m-1" data-toggle="modal" data-target="#modalDatos" href="#">Nuestros datos</a>
          </div>
        <div class="modal fade" id="modalDatos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nuestros Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Somos una tienda especializada en componentes informatica</p>
        <h3>Tenefono:</h3>
        <p>999461675</p>
        <h3>Correo:</h3>
        <p>tusmejorescomponentes@tuscomponentes.com</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerar</button>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<?php include '../templates/piead.php'; ?>
