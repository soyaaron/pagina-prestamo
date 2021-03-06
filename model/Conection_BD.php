<?php

const DB_SERVIDOR = 'localhost';
const DB_CHARACTER = 'utf8';

abstract class Conection_BD {

private static $db_usuario = 'root'; # <-- Usuario que tiene acceso a la BD.
private static $db_pass = '';  # <-- password del usuario.
private static $db_servidor = 'localhost';
private static $db_name = 'prestamos'; # <-- Nonbre de la BD.
private static $db_charset= DB_CHARACTER;

# CONEXION A LA BD
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

}
?>