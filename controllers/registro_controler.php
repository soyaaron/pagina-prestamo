<?php

 require_once "../model/Registro_model.php";
 $registro = new Registro_model;


 # VARIABLES RESIBIDAS POR POST

 $nombre = $_POST["nombre"];                $apellido =$_POST["apellido"];
 $fechaNacimiento = $_POST["fechaNacimiento"];  $cedula = $_POST["cedula"];
 $sexo = $_POST["genero"];                  $estadoCivil = $_POST["estadoCivil"];
 $nacionalidad = $_POST["nacionalidad"];    $direccionCalle = $_POST["calle"];
 $apartamento = $_POST["apartamento"];      $provincia =$_POST["provincia"];
 $municipio = $_POST["municipio"];          $correo = $_POST["email"];
 $pass = $_POST["pass"];                    $telefono = $_POST["telefono"];
 $empresa = $_POST['empresa'];              $actividadLaboral = $_POST['actividadLaboral'];
 $telefonoTrabajo = $_POST['telefonoTrabajo'];  $years = (int) $_POST['anios'];
 $meses = (int) $_POST['meses'];                  $sueldo = (float) $_POST['sueldo'];
 $direccionCalleTrabajo = $_POST['direccionCalleTrabajo'];  $provinciaTrabajo = $_POST['provinciaTrabajo'];
 $municipioTrabajo = $_POST['municipioTrabajo'];



 # METODO QUE INSERTA LOS DATOS PERSONALES DEL USUARIO.

 $insertar = $registro->registry($nombre,$apellido,$fechaNacimiento,$cedula,$sexo,$estadoCivil,$nacionalidad,$direccionCalle,$apartamento,$provincia,$municipio,$correo,$pass);


 # ESTE METODO  SE ENCARGARA DE OBTENER EL "ID" DEL USUARIO.
 $resultado = $registro->select($cedula,$correo);
 
 # ESTE METODO TOMARA EL "ID"  QUE DEVUELE EL METODO SLECT  COMO REFERENCIA  PARA SABER A CUAL USUARIO ASIGNARA EL TELEFONO QUE DEBE DE INSERTAR.
 $registro->tel($telefono,$resultado);

 # ESTE METODO TOMARA EL "ID"  QUE DEVUELE EL METODO SLECT  COMO REFERENCIA  PARA SABER A CUAL USUARIO ASIGNARA LOS DATOS DE LA EMPRRESA QUE DEBE DE INSERTAR.
 $registro->datosEmpresa($empresa,$actividadLaboral,$telefonoTrabajo,$years,$meses,$sueldo,$direccionCalleTrabajo,$provinciaTrabajo,$municipioTrabajo,$resultado);
    


 






