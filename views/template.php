<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de financiamiento</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
  
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <a href="index2.html" class="logo">
    
      <span class="logo-mini"><b>S</b>financiamiento</span>

      <span class="logo-lg"><b>Admin</b></span>
    </a>

    <!--  Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
  
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Menu derecho -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Mensajes</li>
              <li>
                <!-- mensajes -->
                <ul class="menu">
                  <li><!-- Vista de los diferentes mensajes -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- Imagen de usuario -->
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- tiempo que llego el mensaje -->
                      <h4>
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- EL mensaje-->
                      <p>Mensajes del cliente</p>
                    </a>
                  </li>
          
                </ul>
             
              </li>
              <li class="footer"><a href="#">Todos los mensajes resividos</a></li>
            </ul>
          </li>
          

          <!-- Esta de aqui son las notificaciones  -->
          <li class="dropdown notifications-menu">
    
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">notificaciones</li>
              <li>
              
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 usuarios nuevos utilizaron la plataforma
                    </a>
                  </li>
                
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todas</a></li>
            </ul>
          </li>
          <!-- Aqui las actividades realizadas por los clientes-->
          <li class="dropdown tasks-menu">
         
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">tienes 9 actividades pendientes</li>
              <li>
          
                <ul class="menu">
                  <li>
                    <a href="#">
                 
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- Aqui la barra de progreso que ves en las actividades -->
                      <div class="progress xs">
    
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
     
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!--  Menu del usuario  -->
          <li class="dropdown user user-menu">
      
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <!-- Aqui la imagen se la deje predeterminada-->
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
           
              <span class="hidden-xs">Reimy Mateo</span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Reimy - Web Developer
                  <small>Administrador principal</small>
                </p>
              </li>
             
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">clientes</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">ventas</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">solicitudes</a>
                  </div>
                </div>
              
              </li>
            
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
       
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">

  
    <section class="sidebar">

  
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Reimy</p>
          <!-- Estado y navar secundario -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Las opciones -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
   

      <ul class="sidebar-menu">
        <li class="header">Sistema</li>
    
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Ver ususarios</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>facturas </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Completas</a></li>
            <li><a href="#">Por pagar </a></li>
          </ul>
        </li>
      </ul>
   
    </section>

  </aside>


  <div class="content-wrapper">
    <!-- Aqui van las pestañas-->
    <section class="content-header">
      <h1>
        Pestañas por integral
        <small>   Aqui van las vistas que van a ser integradas como la facturas,clientes, etc....</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard">opcional</i> </a></li>
        <li class="active">opcional</li>
      </ol>
    </section>


    <section class="content">



    </section>
 
  </div>


  <!-- El Footer -->
  <footer class="main-footer">
   
    <div class="pull-right hidden-xs">
      Lo que quieran aqui
    </div>
    
    <strong> <a href="#">Aqui el footer </a>.</strong> 
  </footer>


  <aside class="control-sidebar control-sidebar-dark">

    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
   
    <div class="tab-content">
      
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Actividades recientes </h3>
        <ul class="control-sidebar-menu">
          <li>
        
              </div>
            </a>
          </li>
        </ul>
        

        <h3 class="control-sidebar-heading">Progreso de actividades</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
               actividad en la paginas de clientes
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
     

      </div>
    
      <div class="tab-pane" id="control-sidebar-stats-tab">Estadisticas </div>
  
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading"></h3>

      
      
    </div>
  </aside>

  <div class="control-sidebar-bg"></div>
</div>


<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script><script src="views/dist/js/app.min.js"></script>


</body>
</html>
