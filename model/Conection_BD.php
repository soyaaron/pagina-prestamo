<?php

const DB = 'mysql';
const DB_SERVIDOR = 'localhost';
const DB_CHARACTER = 'utf8';

abstract class Conection_BD {

private static $db_usuario = 'onix';
private static $db_pass = 'Root12345';
private static $db_servidor = DB_SERVIDOR;
private static $db_name = 'prestamos';
private static $db_charset= DB_CHARACTER;
private  $conexion; #conectar con la BD

#Conexion con la BD

public function conectar (){

    try {
        $dsn = "mysql:host=".self::$db_servidor. ";dbname=".self::$db_name;
        $pdo = new PDO($dsn, self::$db_usuario, self::$db_pass);

        # Asignar un caracter
        $pdo->exec("SET CHARACTER SET".self::$db_charset);

        return $pdo;
    } catch (PDOException $e) {
       exit("ERROR: ". $e->getMessage());
    }

}

    protected function desconectar()
    {
        $this->$conexion = null;
    }
}
?>