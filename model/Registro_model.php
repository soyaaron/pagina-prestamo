<?php

require_once "Conection_BD.php";


class Registro_model extends Conection_BD{


# INSERTAR LOS DATOS PRINCIPALES DEL USUARIO

public function registry($nombre,$apellido,$fechaNacimiento,$cedula,$sexo,$estadoCivil,$nacionalidad,$direccionCalle,$apartamento,$provincia,$municipio,$correo,$pass){
    $conection = parent::conectar();
    
    try {
        $query = "INSERT INTO usuario (nombre,apellido,fecha_nacimiento,cedula,sexo,estado_civil,nacionalidad,direccion_calle,apartamento,provincia,municipio,correo_electronico,pass) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $conection->prepare($query)->execute([$nombre,$apellido,$fechaNacimiento,$cedula,$sexo,$estadoCivil,$nacionalidad,$direccionCalle,$apartamento,$provincia,$municipio,$correo,$pass]);

    } catch (PDOException $e) {
        exit("ERROR:".$e->getMessage());
    }finally{
        $conection = null;
    }
}


# SELECCIONAR EL ID DEL USUARIO MEDIATE SU CORREO Y SU CEDULA LOS CUALE SON UNICOS 

public function select($cedula,$correo){
    $conection = parent::conectar();
    
    try {
        $query = "SELECT id_usuario FROM usuario WHERE cedula = '{$cedula}' AND correo_electronico = '{$correo}'";
        $id = $conection->query($query)->fetch();
        return $id;
    } catch (PDOException $e) {
        exit("ERROR:".$e->getMessage());
    }finally{
        $conection = null;
    }
}

# INSERTA EL TELEFONO AL USUARIO QUE PERTENECIENTE 

public function tel($telefono,$idUsuario){
    $conection = parent::conectar();
    
    try {
        $query = "INSERT INTO telefono (telefono,id_usuario) VALUES (?,?)";
        $conection->prepare($query)->execute([$telefono,$idUsuario['id_usuario']]);
    } catch (PDOException $e) {
        exit("ERROR:".$e->getMessage());
    }finally{
        $conection = null;
    }
}


# INSERTAR DATOS DE LA EMPRESA DEL USUARIO

public function datosEmpresa($empresa,$actividadLaboral,$telefonoTrabajo,$years,$meses,$sueldo,$direccionCalleTrabajo,$provinciaTrabajo, $municipioTrabajo,$idUsuario){
    $conection = parent::conectar();
    
    try {
        $query = "INSERT INTO trabajo (empresa,actividad_laboral,telefono,tiempo_anios,tiempo_meses,ingreso_mensual,direccion_calle,provincia,municipio,id_usuario) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $conection->prepare($query)->execute([$empresa,$actividadLaboral,$telefonoTrabajo,$years,$meses,$sueldo,$direccionCalleTrabajo,$provinciaTrabajo,$municipioTrabajo,$idUsuario['id_usuario']]);

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
