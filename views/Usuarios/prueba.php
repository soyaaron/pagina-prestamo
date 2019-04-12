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
  <link rel="stylesheet" href="views/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="views/dist/css/skins/skin-blue.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini" href="views/dist/css/skins/skin-blue.min.css">

 <aside class="main-sidebar">

  
    <section class="sidebar"  >

  
    
        
      </div>
 

      <ul class="sidebar-menu" >
        <li class="header" style="margin-right:10px;"><h1> <label style="margin-right:20px;">Impekable</label> </h1> </li>
    
        <li class="active"><a href="/SistemaPHP/views/historial.php"><i class="fas fa-home"></i>Home-calculadora </a></li>
        <li><a href="#"><i class="fas fa-receipt"></i> <span>Historial de prestamos</span></a></li>
         <li><a href="/SistemaPHP/views/template.php"><i class="fas fa-envelope"></i> <span>Solicitud de prestamos</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fas fa-user"></i></i> <span>Perfil usuario </span>
   
        </li>
      </ul>
   
    </section>

  </aside>


  <div class="content-wrapper" style="margin-right:21%; margin-left:25% ; Margin-top:3%; height:20px; ">
  <style>
h2{
 color:black;
 margin-left:5%;
}
h3{
 color:black;
 margin-left:5%;
}
label{
  color:black;
}
.main-form{
    width: 450px;
    margin: auto;
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
    <input type="number" id="monto" placeholder="Monto o cantidad" class="form-control" style="width:120%;" >
</div>
<div class="form-group col-md-4">
    <label > Fecha</label>
    <input type="date" id="fecha" placeholder="Fecha en que realizo el prestamo" class="form-control"style="width:115%; margin-right:20%;" >

</div>
<div class="form-group col-md-5">
    <label style="margin-left:20px;"> Tiempo del prestamo </label>
    <input type="week"  id="tiempo" placeholder="Tiempo de prestamo" class="form-control"  style="">
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
  
  <script src="views/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="views/bootstrap/js/bootstrap.min.js"></script><script src="views/dist/js/app.min.js"></script>

</body>
</html>