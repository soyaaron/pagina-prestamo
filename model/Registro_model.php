<?php

require_once "Conection_BD.php";


class Registro_model extends Conection_BD{


# INSERTAR REGISTRO DEL USUARIO



public function registry($nombre,$apellido,$fechaNacimiento,$cedula,$sexo,$estadoCivil,$nacionalidad,$direccionCalle,$apartamento,$provincia,$municipio,$correo,$pass){
    $conection = parent::conectar();
    
    try {
        $query = "INSERT INTO usuario (nombre,apellido,fecha_nacimiento,cedula,sexo,estado_civil,nacionalidad,direccion_calle,apartamento,provincia,municipio,correo_electronico,pass) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $conection->prepare($query)->execute([$nombre,$apellido,$fechaNacimiento,$cedula,$sexo,$estadoCivil,$nacionalidad,$direccionCalle,$apartamento,$provincia,$municipio,$correo,$pass]);

        return true;
    } catch (PDOException $e) {
        exit("ERROR:".$e->getMessage());
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
        $conection = null;
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
        $conection = null;
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
        $conection = null;
    }
}




 

}
