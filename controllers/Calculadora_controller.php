<?php
require_once "../model/Calculadora_Model.php";
//require_once "../calc.php";
$calculadora = new Calculadora_Model;


//La variable resibidas por el metodo POST, variable MONTO
global $monto;
$monto = $_POST['inputMonto'];
//echo $monto;
global $tiempo;
//Identificar los porcentajes, por medio del monto
global $identififcador;
$identififcador="";
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
echo "<br/>";
echo "<pre>";
//print_r($seleccionar);
echo "</pre>";




//FIn de los porcentajes



//campos de los radios buttom
//declarar la varible
$options="";
//validar que el campo no este vacio

    if(isset($_POST['options'])){
        $options = $_POST['options'];
    
             if($options=="opt1"){
                  $options=1;
                  $tiempo=12;
                  //var_dump($options);
                  Interes($identififcador,$monto,$options,$tiempo);
  
              }elseif($options=="opt2"){
                  global $options;
                  $options = 2;
                  $tiempo=24;
                  //var_dump($options);
                  echo "<hr/>";
                  Interes($identififcador,$monto,$options,$tiempo);
                   
              }elseif($options=="opt3"){
                  $options=1;
                  $tiempo=36;
                  //var_dump($options);
                  Interes($identififcador,$monto,$options,$tiempo);
              }
  
  }else{
      $options="";
      var_dump("Debe seleccionar el Tiempo del monto");
  }
  

            



//ESTRATEGIA PARA CALCULAR LA CUOTA MENSUAL.
//(//Monto  - del cliente-- usario inserte =2,500
//Interes - BD * 0.01  =0.35

//Interes en dinero = (interes*monto) 875

//tasa = Interes en dinero* 2anos- label de tiempo =1750

//monto total= tasa + monto = 4250
//cuotas por mes= monto total/ 2anos(pero en meses) = 177.08 pesos).

//funcion-para resolver los intereses
function Interes($bd_identificar,$monto_user, $options_user, $tiempo_mes){
    if($bd_identificar=="A"){
        $bd_identificar=35;
        $interes = ($bd_identificar*0.01);
    }elseif($bd_identificar=="B"){
        $bd_identificar=30;
        $interes = ($bd_identificar*0.01);
    }elseif($bd_identificar=="C"){
        $bd_identificar=25;
        $interes = ($bd_identificar*0.01);
    }elseif($bd_identificar=="D"){
        $bd_identificar=20;
        $interes = ($bd_identificar*0.01);
    }elseif($bd_identificar=="E"){
        $bd_identificar=15;
        $interes = ($bd_identificar*0.01);
    }else{
        echo "<h1>surgio un problema con el identificador</h1>";
    }
    $interes_dinero = ($interes*$monto_user);
    $tasa = ($interes_dinero*$options_user);
    $monto_total = ($tasa+$monto_user);
    $cuotas_mes = ($monto_total/$tiempo_mes);
    

    return $cuotas_mes;
}
//almacena la funcion interes
$mi_var=Interes($identififcador,$monto,$options,$tiempo);

//Incluir la vista en el modelo.
// require_once "../calc.php";
header("Location: ../calc.php?porciento={$seleccionar}&&cuota={$mi_var}");

?>