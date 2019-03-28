<?php

 require_once "../model/Registro_model.php";
 $registro = new Registro_model;


 $nombre = $_POST["nombre"];
 $apellido =$_POST["apellido"];
 $fechaNacimiento = $_POST["fechaNacimiento"];
 $cedula = $_POST["cedula"];
 $sexo = $_POST["genero"];
 $estadoCivil = $_POST["estadoCivil"];
 $nacionalidad = $_POST["nacionalidad"];
 $direccionCalle = $_POST["calle"];
 $apartamento = $_POST["apartamento"];
 $provincia =$_POST["provincia"];
 $municipio = $_POST["municipio"];
 $correo = $_POST["email"];
 $pass = $_POST["pass"];

 $insertar = $registro->registry($nombre,$apellido,$fechaNacimiento,$cedula,$sexo,$estadoCivil,$nacionalidad,$direccionCalle,$apartamento,$provincia,$municipio,$correo,$pass);

 if($insertar){
     echo "Bien";
 }



