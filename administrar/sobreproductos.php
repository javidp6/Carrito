<?php
        include '../global/conexion.php';

        class Productos{
            public function __construct(){}

            public function insertar($producto){
                $Database = Database::connect();
                $insert=$Database->prepare( 'insert into productos (nombre, precio,) values (:nom, :precio,)' );
                $insert->bindValue('nom', $producto->getNombre());
                $insert->bindValue('precio',$producto->getPrecio());
                $insert->execute();
               
            }
            public function mostrar(){
                $Database = Database::connect();
                $listaProductos=[];
                $select=$Database->query('select * from productos');
     
                foreach($select->fetchAll() as $producto){
                    $Produc= new Producto();
                    $Produc->setId($producto['id']);
                    $Produc->setNombre($producto['nombre']);
                    $Produc->setPrecio($producto['precio']);
                    $listaProductos[]=$Produc;
                }
                return $listaProductos;
            }

            public function eliminar($id){
                $Database = Database::connect();
                $eliminar=$Database->prepare('delete from productos where id=:id');
                $eliminar->bindValue('id',$id);
                $eliminar->execute();
            }
     

            public function obtenerProducto($id){
                $Database = Database::connect();
                $select=$Database->prepare('select * from productos where id=:id');
                $select->bindValue('id',$id);
                $select->execute();
                $producto=$select->fetch();
                $Produc= new Producto();
                $Produc->setId($producto['id']);
                $Produc->setNombre($producto['nombre']);
                $Produc->setPrecio($producto['precio']);
                return $Produc;
            }
     
            /*La funcion actualizar, modifica el elemento de la tabla productos con el id recibido */
            public function actualizar($producto){
                $Database = Database::connect();
                $actualizar=$Database->prepare('update productos set nombre=:nom, precio=:precio, where id=:id');
                $actualizar->bindValue('id',$producto->getId());
                $actualizar->bindValue('nom', $producto->getNombre());
                $actualizar->bindValue('precio',$producto->getPrecio());
                $actualizar->execute();
            }
        }
?>