<?php

class Database{

    private static $conexion = NULL;
    public function connect() {

        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $usuario = 'root';
        $contraseña = '';
        $dbname = 'mysql:host=localhost;dbname=tienda';
        self::$conexion = new PDO( $dbname, $usuario, $contraseña, $pdo_options );
        return self::$conexion;

    }
}

?>