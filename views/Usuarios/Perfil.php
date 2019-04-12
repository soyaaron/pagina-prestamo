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
<body class="hold-transition skin-blue sidebar" href="../dist/css/skins/skin-blue.min.css">

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
<aside class="main-sidebar">

  
    <section class="sidebar"  >

  
    
        
      </div>
 

      <ul class="sidebar-menu" >
        <li class="header" style="margin-right:10px;;"><h2> Impekable </h2> </li>
    
        <li class="active"><a href="/SistemaPHP/views/historial.php"><i class="fas fa-home"></i>Home-calculadora </a></li>
        <li><a href="#"><i class="fas fa-receipt"></i> <span>Historial de prestamos</span></a></li>
         <li><a href="/SistemaPHP/views/template.php"><i class="fas fa-envelope"></i> <span>Solicitud de prestamos</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fas fa-user"></i></i> <span>Perfil usuario </span>
   
        </li>
      </ul>
   
    </section>


  </aside>
<style>



</style>
 <label style="margin-left:30%;"><h3> Financiamiento </h3></label>
  <div class="content-wrapper" style="margin-right:10%; margin-left:30% ; Margin-top:1%; height:90%; ">


  <header>
      <img src="https://conceptodefinicion.de/wp-content/uploads/2017/01/Educaci%C3%B3n_Ambiental.jpg"><h3>David jame</h3><label style="font-size:13px; color:grey;"><span>United states</label></span></label><br>
      <label> Mobile: 871-567-4877</label>
  </header>
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


  h4{
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


</style>

<div class="container" ><h4> Datos generales </h4>

<br>
<h3>Datos generales</h3>
</div>

<section class="container">

 
<div class="container mt-2"> 
   <div class="row">
<div class="form-group col-md-6">

<form data-toggle="boostrapValidate">

<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Nombre </label>
    <input type="text" id="Nombre" placeholder="Nombre" class="form-control" style="width:120%;	border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5">
    <label >apellido </label>
    <input type="text" id="Apellido" placeholder="Apellido" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-4"style="margin-left:20px;">
    <label > Fecha</label>
    <input type="date" id="fecha" placeholder="Fecha en que realizo el prestamo" class="form-control"style="width:115%; margin-right:20%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >

</div>
<div class="form-group col-md-1 "style=" margin-right:20px;" >
   <label for="">sexo</label>
        <select name="garante" class="custom-select" id="inputGroupSelect02" style="margin-top:;20px">
           <option value="1">M/f</option>
          <option value="2">Masculino</option>
          <option value="3">Femenino</option>
        </select>
      </div>
      
      <div class="form-group col-md-12"style="margin-left:20px;">
   <label for="">Estado Civil</label>
        <select name="garante" class="custom-select" id="inputGroupSelect02" style="margin-botton:">
           <option value="1">Soltero</option>
          <option value="2">Casado</option>
          
        </select>
      </div>

 <div class="form-group col-md-6"Style="margin-left:17px;">
    <label style="margin-left:5px;"> cedula de identidad </label>
    <input type="Number"  id="tiempo" placeholder="cedula de identidad" class="form-control"  style="margin-left:5px;border: 2px solid ;
	border-radius: 4px;
  outline: none;">

</div>
<div class="form-group col-md-6"Style="margin-left:17px;">
   <h3>Direccion domicilio <h3>
  

</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Calle </label>
    <input type="text" id="calle" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>

<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Numero de casa/dep</label>
    <input type="Number" id="Num/cas" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >provincia </label>
    <input type="text" id="provinvia" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >municipio</label>
    <input type="text" id="municipio" placeholder="Municipio" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-6" Style="margin-left:17px;">
    <h3>Formas de contacto<h3> 
  
</div>

<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Telefono de casa </label>
    <input type="Number" id="tel/cas" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>

<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label > tel/Oficina</label>
    <input type="Number" id="tel/ofic" placeholder="Nombre" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >celular </label>
    <input type="Number" id="cel" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Correo Electronico</label>
    <input type="e-mail" id="correo" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>

<div class="form-group col-md-6"Style="margin-left:17px;">
         <h3>Pariente cercano<h3>
  

</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Nombre </label>
    <input type="text" id="Nombre_pariente" placeholder="Nombre" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>


<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >apellido </label>
    <input type="text" id="Apellido/par" placeholder="Apellido" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Parentesco</label>
    <input type="text" id="Parentesco" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Telefono</label>
    <input type="Number" id="Tel/pariente" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-6"Style="margin-left:17px;">
  <h4>Datos  Laborales<h4>
  

</div>
<div class="form-group col-md-6"Style="margin-left:17px;">
    <h3>Sobre la empresa<h3> 
  

</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Nombre de empresa </label>
    <input type="text" id="Nombre/empre" placeholder="Nombre" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>

<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Actividad laboral </label>
    <input type="text" id="trabajo" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >telefono </label>
    <input type="text" id="telefono/empre" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >ingresos mensual
    </label>
    <input type="Number" id="Ingreso" placeholder="Ingreso" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-6"Style="margin-left:17px;">
   <h3>Direccion trabajo<h3> 
  

</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Calle </label>
    <input type="text" id="calle/trab" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>

<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >Numero de casa/dep</label>
    <input type="Number" id="Num/trab" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >provincia </label>
    <input type="text" id="provinvia/trab" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
</div>
<div class="form-group col-md-5"style="margin-right:17px;margin-left:17px;">
    <label >municipio</label>
    <input type="text" id="municipio/trab" placeholder="Municipio" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;" >
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