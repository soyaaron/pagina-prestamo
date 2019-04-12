

<nav class="navbar navbar-static-top" role="navigation">
    
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>


        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
            <li><a href="../dashboard/dashboard.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes 
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../SolicitudesAdmin/adminsolicitud.php">Recientes</a></li>
                        <li><a href="../SolicitudesAdmin/solaprovada.php">Aprovadas</a></li>
                        <li><a href="../SolicitudesAdmin/solrechazada.php">Rechazadas</a></li>
                </li>

            </ul>

            <li><a href="../PrestamosAdmin/prestamosActivos.php">Prestamos</a></li>

            <li><a href="../Dashboard/admintasas.php"> Administrar tasas</a></li>
            <li class="active"><a href="../dashboard/solicitudpersonal.php"><i class="fa fa-link"></i> <span>Solicitud
                                    personal</a></li>
                        <li class="active"><a href="vistaclientes.php"><i class="fa fa-link"></i>
                                <span>Clientes</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../Dashboard/ayuda.php">Ayuda</a></li>
                        <li class="divider"></li>
                        <li><a href="../../controllers/logOut_Controller.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>