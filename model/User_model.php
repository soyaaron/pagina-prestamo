<?php

require_once "Conection_BD.php";

class User_model extends Conection_BD{

    public function solicitud(){
        $connection = parent::conectar();
        
        try {
            $query = "";
            
        } catch (PDOException $e) {
            exit("ERROR:".$e->getMessage());
        }finally{
            $conection = null;
        }
    }

}