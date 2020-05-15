<?php
    include '../global/config.php';
    include '../global/conexion.php';
    include '../carrito.php';
    include '../templates/cabecerad.php'
?>
<br>
<br>
<?php
if($_POST){

    $total=0;
    $SID=session_id();
    $Correo="fjdp6@hotmail.com";



    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }

    $Database = Database::connect();
    $select  = $Database -> prepare("INSERT INTO `ventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `total`, `status`) 
                                VALUES (NULL,:ClaveTransaccion,'', NOW(),:Correo,:total, 'pendiente');");

    $select->bindParam(":ClaveTransaccion",$SID);
    $select->bindParam(":Correo",$Correo);
    $select->bindParam(":total",$total);
    $select->execute();

    $idventa=$Database->lastInsertID();
        
        $select=$Database->prepare("INSERT INTO `detallepedidos` (`ID`, `IDVenta`, `IDProducto`, `PrecioSeleccionado`, `Cantidad`, `Descargado`) 
                                VALUES (NULL,:IDVenta,:IDProducto,:PrecioSelecionado,:PrecioSelecionado, '0');");

    $select->bindParam(":IDVenta",$idventa);
    $select->bindParam(":IDProducto",$producto['ID']);
    $select->bindParam(":PrecioSelecionado",$producto['PRECIO']);
    $select->bindParam(":Cantidad",$producto['CANTIDAD']);
    $select->execute();



}
?>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<div class="jumbotron text-center">
    <h1 class="display-4">¡Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Pago ha realizar</p> 
    <h4><?php echo number_format($total,2)?>€</h4>
    <div id="paypal-button-container"></div>
</div>

     <div id="paypal-button-container"></div>


<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

<script>

    paypal.Buttons({
        style: {
            layout: 'horizontal'
        }
    }).render('#paypal-button-container');
</script>

    
    
<?php include '../templates/piead.php'; ?>
