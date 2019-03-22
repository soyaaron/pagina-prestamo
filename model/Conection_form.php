<?php

require_once "Conection_BD";


class Conection_form extends Conection_BD{


# INSERTAR REGISTRO DEL USUARIO



public function registry(){
    $conection = parent::conectar();
    
    try {
        $query = ("");
    } catch (PDOException $e) {
        exit("ERROR:".$e->getMessage());
    }finally{
        parent::desconectar();
    }
}


# SELECCIONAR LOS DATOS DEL USUARIO QUE FUERON INSERTADOS EN EL LOGIN  PARA INSERTAR LOS FALTANTES 


public function datos_usuario(){
    $conection = parent::conectar();
    
    try {
        $query = ("");
    } catch (PDOException $e) {
        exit("ERROR:".$e->getMessage());
    }finally{
        psrent::desconectar();
    }
}
    

# INSERTAR DATOS PARA LA SOLICITUD DEL PRESTAMO

public function insertar(){
    $conection = parent::conectar();
    
    try {
        $query = ("");
    } catch (PDOException $e) {
        exit("ERROR:".$e->getMessage());
    }finally{
        psrent::desconectar();
    }
}


# CONFIRMAR LA EXISTENCIA DEL USER Y EL PASSWORD
public function login(){
    $conection = parent::conectar();
    
    try {
        $query = ("");
    } catch (PDOException $e) {
        exit("ERROR:".$e->getMessage());
    }finally{
       psrent::desconectar();
    }
}




 

}
