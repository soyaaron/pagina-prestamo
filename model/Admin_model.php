<?php

require_once("Conection_BD.php");

class Admin_model extends Conection_BD{


# ESTE METODO SE ENCARGARA DE TRAER LA INFORMACION DE LOS USUARIOS REGISTRADOS. 
    public function users(){
        $connection = parent::conectar();
        
        try {
            $query = "SELECT nombre,apellido,cedula,sexo,nacionalidad FROM usuario ";
            return $connection->query($query)->fetchAll();
        } catch (PDOException $e) {
            exit("ERROR:".$e->getMessage());
        }finally{
            $conection = null;
        }
    }

    public function prestamosActivos(){
        $connection = parent::conectar();
        
        try {
            $query = "";
        } catch (PDOException $e) {
            exit("ERROR:".$e->getMessage());
        }finally{
            $conection = null;
        }
    }

    public function solicitudesRecientes(){
        $connection = parent::conectar();
        
        try {
            $query = "";
        } catch (PDOException $e) {
            exit("ERROR:".$e->getMessage());
        }finally{
            $conection = null;
        }
    }

    public function solicitudesAprovadas(){
        $connection = parent::conectar();
        
        try {
            $query = "";
        } catch (PDOException $e) {
            exit("ERROR:".$e->getMessage());
        }finally{
            $conection = null;
        }
    }

    public function solicitudesRechazadas(){
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