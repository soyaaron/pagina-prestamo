<?php

require_once ("Conection_BD.php");


class Login_model extends Conection_BD {


    # CONFIRMAR LA EXISTENCIA DEL USER Y EL PASSWORD
public function login($email){
    $connection = parent::conectar();
    
    try {
        $query = "SELECT * FROM usuarios WHERE usuarios.Nombre='{$email}'";
            return $connection->query($query)->fetchAll();
    } catch (PDOException $e) {
        exit("ERROR:".$e->getMessage());
    }finally{
        $conection = null;
    }
}

}
 
