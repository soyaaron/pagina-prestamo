<?php

require_once("../model/Login_model.php");

$loginModel = new Login_model;

# VARIABLES RESIBIDAS POR POST.
$email = $_POST["email"];
$password = $_POST["password"];


# CON ESTE METODO ETRAEMOS TODOS LOS PARAMETROS DEL USUARIO CON EL EMAIL INTRODUCIDO.
$confirm = $loginModel->login($email);

# HACEMOS UN COMPARACION ENTRE EL PASSWORD INTRODUCIDO Y EL PASSWORD ENCRIPTADO PARA CONFIRMAR QUE EXISTE.
foreach ($confirm as $user) {
    $pass = $user["pass"];
    if (password_verify($password,$pass)) {
        session_start();
        $_SESSION["user"] = $user["nombre"];
        header("location: ../views/Dashboard/dashboard.php");
    }
}
header("location: ../views/Login/index.php");