<?php
require_once "../model/Calculadora_Model.php";

$calculadora = new Calculadora_Model;

//La variable resibidas por el metodo POST
$monto = $_POST['inputMonto'];

echo $monto;
$identififcador="";

//Metodo que recibe los porcentajes

if($monto >= 1 && $monto <= 25000)
{
    $identififcador="A";
    
}elseif($monto > 25000 && $monto <=7500)
{
    $identififcador="B";
}elseif($monto > 75000 && $monto <=125000){
    $identififcador="C";
}elseif($monto > 125000 && $monto <=250000){
    $identififcador="D";
}elseif($monto > 250000){
    $identififcador="E";
}else {
    echo "<h1>USTED TIENE PROBLEMAS :/</h1>";
}

$seleccionar=$calculadora->TasaInteres($identififcador);
print_r($seleccionar);

