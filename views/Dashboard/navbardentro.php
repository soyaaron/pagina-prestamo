<a href="../Dashboard/dashboard.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">ADM<</span> <!-- logo for regular prestate and mobile devices -->
            <span class="logo-lg">Admin</span>
</a>

<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>


        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../Dashboard/adminsolicitud.php">Recientes</a></li>
                        <li><a href="../Dashboard/solaprovada.php">Aprovadas</a></li>
                        <li><a href="../Dashboard/solrechazada.php">Rechazadas</a></li>
                </li>

            </ul>

            <li><a href="prestamosActivos.php">Prestamos</a></li>

            <li><a href="admintasas.php"> Administrar tasas</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../Dashboard/ayuda.php">Ayuda</a></li>
                        <li class="divider"></li>
                        <li><a href="../Login/index.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>