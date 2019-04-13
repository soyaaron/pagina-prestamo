<?php

require_once("../model/Login_model.php");

$loginModel = new Login_model;

# VARIABLES RESIBIDAS POR POST.
$email = $_POST["email"];
$password = $_POST["password"];


# CON ESTE METODO ETRAEMOS TODOS LOS PARAMETROS DEL USUARIO CON EL EMAIL INTRODUCIDO.
$confirm = $loginModel->login($email);

# HACEMOS UN COMPARACION ENTRE EL PASSWORD INTRODUCIDO Y EL PASSWORD ENCRIPTADO PARA CONFIRMAR QUE EXISTE.
if ($confirm) {
   foreach ($confirm as $user) {
         $pass = $user["pass"];
        if(password_verify($password,$pass) & $user["tipo"] == "admin") {
            session_start();
            $_SESSION["user"] = $user["correo_electronico"];

            header("location: ../views/Dashboard/dashboard.php");
        }else if(password_verify($password,$pass) & $user["tipo"] == "user"){
            session_start();
            $_SESSION["user"] = $user["correo_electronico"];

            header("location: ../views/Usuarios/Perfil.php");
        }else{
            header("location: ../views/Login/index.php"); 
        }
    }
}else{
    header("location: ../views/Login/index.php");
}
