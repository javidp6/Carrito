<?php
include '../global/config.php';
include '../global/conexion.php';
include '../carrito.php';
include '../templates/cabecerausu.php';

?>
<br>
<br>
<?php if($mensaje!="") { ?>
                <div class="alert alert-success">
                    <?php echo $mensaje;?>
                </div>
        <?php } ?>
<br>

<div class="row">
        <?php

            $Database = Database::connect();
            $select  = $Database -> prepare( 'select * from productos');
            $select -> execute();
            $listaProductos = $select -> fetchAll(PDO::FETCH_ASSOC);
           
            
        ?>
        <?php foreach($listaProductos as $producto){ ?>
            <div class="col-3">
                <div class="card">
                    <img 
                        class="card-img-top" 
                        src="<?php echo $producto['imagen'];?>"
                        height="317px"
                    >
                    <div class="card-body">
                        <span><?php echo $producto['nombre'];?></span>   
                        <h5 class="card-title"><?php echo $producto['precio'];?>€</h5>
  
                        <form action="" method="post">
                           <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>">
                           <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>">
                           <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>">
                           <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                           <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>    
                            
                        </form>
                        
                           
                    </div>
                </div>
            </div>
        <?php }?>
            
            
        </div>
        
    </div>
<?php include '../templates/pieusu.php'; ?>