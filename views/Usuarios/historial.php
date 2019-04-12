<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="shortcut icon" type="image/png" href="../dist/img/logo1.png">
  <title>Sistema de financiamiento</title>

<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
<link rel="stylesheet" href="../dist/css/estilos.css">
</head>
<body class="hold-transition skin-blue sidebar-mini" href="../dist/css/skins/skin-blue.min.css">
<aside class="main-sidebar">

  
<section class="sidebar"  >

  
    
        
</div>
<style> 

.sidebar{
	
	
	width:100%;
	height: 10%;
	position: absolute;     
}
.sidebar h2{
	
	
	text-align: center;
	padding: 0;
	margin:0;
 border-color: red;
 color:white;
}
body {
	height: 100%;
	background-image: url("../img/fondo-login.jpg");
	background-size: cover;
	background-attachment: fixed;
	
}
body{
	
	font-family: Arial;
}

#main-container{
	margin: 50px auto;
	width: 520px;
}

table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
  width: 5%;
  height:5%;
}

th, td{
	padding: 20px;
}

thead{
	background-color:#246355;
	border-bottom: solid 5px #0F362D;
	color: white;
}

tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: #369681;
	color: white;
}

</style>

<ul class="sidebar-menu" >
  <li class="header" style="margin-right:10px;;"><h2> Impekable </h2> </li>

  <li class="active"><a href="historial.php"><i class="fas fa-home"></i>Home-calculadora </a></li>
  <li><a href="prueba.php"><i class="fas fa-receipt"></i> <span>Historial de prestamos</span></a></li>
   <li><a href="solicitud-prestamo.php"><i class="fas fa-envelope"></i> <span>Solicitud de prestamos</span></a></li>
  <li class="treeview">
    <a href="perfil.php"><i class="fas fa-user"></i></i> <span>Perfil usuario </span>

  </li>
</ul>

</section>

  </aside>


  <div class="content-wrapper" style="margin-right:21%; margin-left:25% ; Margin-top:3%; height:20px; ">
    
<div id="body" class="m-3 bg-light ">

        <div class="col-md-12 p-0">
            <div class="jumbotron jumbotron-fluid" id="parallax">
                <div class="container">
                    <h1 class="display-4">Calculadora</h1>
                    <p class="lead">Aqui puedes previsualizar las tasas y cuentos para el prestamo que deceas realizar</p>
                </div>
            </div>
        </div>

        <div id="body" class="m-3">
                <div class="site-section bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 mb-5">
                                <form id="formulario" class="p-5 bg-white" action = "../controllers/Calculadora_controller.php" method="POST">
                                    <div class="col-md-12 mx-auto">
                                        <h1 class="textcolorpurple"><b> Calculadora de Prestamos</b></h1>
                                        <div class="col-md-5 mx-auto text-black-50">
                                            <h6 class="">Prestamos personales</h6>
                                        </div>
                                        
                                    </div> 
                                    <!--Monto que se va a prestar-->
                                    <div class="row form-group ">
                                        <div class="col-md-8 mb-3 mb-md-0 mx-auto">
                                            <label class="text-dark mx-auto" for="inputMonto">Monto Solicitado</label>
                                            <input type="number" min="1" step="any" class="form-control" id="inputMonto" name="inputMonto" placeholder="" >                                            
                                        </div> 
                                    </div>
                                     <!--Tasa cambiable-->
                                    <div class="row form-group">
                                        <div class="col-md-8 mx-auto">
                                            <label class="text-dark mx-auto" for="inputInteres">Tasa Interes</label>
                                            <input type="number" class="form-control" id="inputInteres" value="<?=$_GET['porciento'];?>" placeholder="<?php 
                                            if(isset($seleccionar)){
                                                print_r($seleccionar);
                                            }else{
                                                
                                                print_r("Inserte el monto, primero");
                                            }
                                            ?>" disabled >     
                                        </div>
                                    </div>
                                    <!--Fecha de los pagos lapso de tiempo-->
                                    <div class="row form-group" >
                                        <div class="col-md-8 btn-group btn-group-toggle mx-auto" data-toggle="buttons" id="inputTiempo">
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" value='opt1' id="option1" autocomplete="off"> 1 Año
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" value='opt2' id="option2" autocomplete="off"> 2 Años
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" value='opt3' id="option3" autocomplete="off"> 3 Años
                                            </label>
                                                
                                        </div>
                                    </div> <br>
                                    <!--Botton calcularr-->
                                    <div class="row form-group">
                                        <div class="col-md-3 mx-auto ">
                                            <button type="submit" class="btn btn-primary py-2 px-4" id="Calcular" style="background:#43425D;"> <b> Calcular</b></button>
                                        </div>
                                    </div>
                                    <br> <br>


                                    <h3 class="textcolorpurple"> <b> Resultado</b></h3>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <h5  id="resultado">
                                                Cuota Mensual
                                                <label class="text-dark" for="">RD$ </label> 
                                                <label class="text-dark" id="total" for=""><?php 
                                            if(isset($mi_var)){
                                                print_r($mi_var);
                                            }else{
                                                echo (isset($_GET['cuota']))? $_GET['cuota'] : "000.000.00" ;
                                            }
                                            ?></label> 
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <h5  id="resultado">
                                                Monto Total
                                                <label class="text-dark" for="">RD$ </label> 
                                                <label class="text-dark" id="total" for=""><?php 
                                            if(isset($mt_oficial)){
                                                print_r($mt_oficial);
                                            }else{
                                                echo (isset($_GET['montoo']))? $_GET['montoo'] : "000.000.00" ;
                                            }
                                            ?></label> 
                                            </h5>
                                        </div>
                                    </div>
                                    <p class="text-justify">Esta información es una proyección, la cual puede variar por diversas razones, tales como: Atraso, pagos incompletos,
                                     abonos extraordinarios a capital, etc.</p>
                                </form>
                                <div class="col-md-12">
                                    
                                </div>
                            </div>


                            <div class="col-md-5">
                            
                                <div class="p-4 mb-3">
                                <h4>Política de Tasas Actuall</h4>
                                    <ul>
                                        <p>
                                            35% para menos o igual a 25,000 pesos. <br>
                                            30% para mas de 25,000 y menos o igual a 75,000 pesos.<br>
                                            25% para mas de 75,000 y menos o igual a 125,000 pesos.<br>
                                            20% para mas de 125,000 y menos o igual a 250,000 pesos.<br>
                                            15% para mas de 250,000 y menos o igual a 500,000 pesos.
                                        </p>
                                    </ul>
                                </div>
                            <!--
                                <div class="p-4 mb-3 bg-white">
                                    <h3 class="h5 text-black mb-3">Más información</h3>
                                    <p>lorem.</p>              
                                </div>
                                        -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>       





</form>
</div>


    </div> </div>


</div>
 

    

</body>
  
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../dist/js/app.min.js"></script>

</body>
</html>