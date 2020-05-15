<?php
        include '../global/conexion.php';

        class CrudProducto{
            public function __construct(){}
            public function insertar($producto){
                $Database = Database::connect();
                $insert=$Database->prepare( 'insert into productos (nombre, descripcion, precio, imagen) values (:nom, :desc, :precio, :img)' );
                $insert->bindValue('nom', $producto->getNombre());
                $insert->bindValue('desc', $producto->getDescripcion());
                $insert->bindValue('precio',$producto->getPrecio());
                $insert->bindValue('img',$producto->getImagen());
                $insert->execute();
               
            }
            public function mostrar(){
                $Database = Database::connect();
                $listaProductos=[];
                $select=$Database->query('select * from productos');
     
                foreach($select->fetchAll() as $producto){
                    $myProducto= new Producto();
                    $myProducto->setId($producto['id']);
                    $myProducto->setNombre($producto['nombre']);
                    $myProducto->setPrecio($producto['precio']);
                    $listaProductos[]=$myProducto;
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
                $myProducto= new Producto();
                $myProducto->setId($producto['id']);
                $myProducto->setNombre($producto['nombre']);
                $myProducto->setPrecio($producto['precio']);
                return $myProducto;
            }
     
            public function actualizar($producto){
                $Database = Database::connect();
                $actualizar=$Database->prepare('update productos set nombre=:nom, precio=:precio where id=:id');
                $actualizar->bindValue('id',$producto->getId());
                $actualizar->bindValue('nom', $producto->getNombre());
                $actualizar->bindValue('precio',$producto->getPrecio());
                $actualizar->execute();
            }
        }
?>