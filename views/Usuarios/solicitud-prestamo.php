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
<link rel="stylesheet" href="../dist/css/template.css">
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

</style>

<ul class="sidebar-menu" >
  <li class="header" style="margin-right:10px;;"><h2> Impekable </h2> </li>

  <li class="active"><a href="Perfil.php"><i class="fas fa-home"></i>Home-calculadora </a></li>
  <li><a href="prueba.php"><i class="fas fa-receipt"></i> <span>Historial de prestamos</span></a></li>
   <li><a href="solicitud-prestamo.php"><i class="fas fa-envelope"></i> <span>Solicitud de prestamos</span></a></li>
  <li class="treeview">
    <a href="Perfil.php"><i class="fas fa-user"></i></i> <span>Perfil usuario </span>

  </li>
</ul>

</section>

  </aside>


  <div class="content-wrapper" style="margin-right:21%; margin-left:25% ; Margin-top:3%; height:20px; ">
    <style>
    
h3{
 color:black;
 margin-left:5%;
}

 h3{
	color:black;
	size: 15px;
	font-size: 20px;
	text-shadow: unset;
	margin-right: 20px;
  
  

}


  h2{
    margin-left:30px;
    color:Black;
font-family:Copperplate Gothic Light; 

}


input{

	border: 2px solid ;
	border-radius: 4px;
  outline: none;
}

label{
font-size:14px;
color:black;

}
.main-form{
    width: 450px;
    margin: auto;
}
img{

	content:12px;
	border-image:40px;
	height:60px;

  margin-left:5%;
  margin-right:2%;
  margin-top:2%;
 border-radius:50% ; 
width: 70px;
	float: left;
}
input:focus{
		border-color:dodgerblue;
}
input {

    width:120%;	
    border: 2px solid;
}


</style>

<div class="conatiner"><h2> Solicitud de prestamos</h2>
<label style="color:grey; margin-left:5%;" ><span>Rellene los datos requeridos para solicitar su prestamo </span></label>
<br>
<h3>datos generales</h3>
</div>

<section class="container">

 
<div class="container mt-2"> 
   <div class="row">
<div class="form-group col-md-6">

<form data-toggle="boostrapValidate">

<div class="form-group col-md-4">
    <label >Monto solicitado </label>
    <input type="number" id="monto" placeholder="Monto o cantidad" class="form-control" >
</div>
<div class="form-group col-md-4">
    <label > Fecha</label>
    <input type="date" id="fecha" placeholder="Fecha en que realizo el prestamo" class="form-control" >

</div>
<div class="form-group col-md-5">
    <label style="margin-left:20px;"> Tiempo del prestamo </label>
    <input type="week"  id="tiempo" placeholder="Tiempo de prestamo" class="form-control"  >
</div>
<div class="form-group col-md-5">
    <label style="margin-left:30px;"> cedula </label>
    <input type="Number"  id="tiempo" placeholder="cedula de identidad" class="form-control"  >

</div>
 <div class="form-group col-md-2">
   <label for="">garante</label>
        <select name="garante" class="custom-select" id="inputGroupSelect02">
          <option value="1">si</option>
          <option value="2">no</option>
        </select>
      </div>
<div class="form-group col-md-5">
  
    <label >Motivos por lo que solicita el prestamo </label><br>
       <textarea id="descripcion" placeholder="escriba una breve descripcion" name="descripcion" rows="5" cols="
       30" inputmode="full-width-latin" style="width:280%;"> </textarea>

</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" value="Enviar" id="enviar" style="width:40%; margin-inline-start: 50%;background:green;">  

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
</html>>