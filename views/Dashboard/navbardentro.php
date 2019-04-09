            <nav class="navbar navbar-static-top ">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="dashboard.php" class="navbar-brand"><b>Administrador</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>


                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="adminsolicitud.php">Solicitudes</a></li> .
                            <li><a href="admintasas.php"> Administrar tasas</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="../Dashboard/configadministrador.php">Configuracion</a></li>
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

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <!-- Optionally, you can add icons to the links -->
                        <input type="button" class="btn btn-primary btn-block"
                            onclick="window.location='../Dashboard/solicitudpersonal.php'" class="Redirect"
                            value="Solicitud en persona" />
                        <input type="button" class="btn btn-primary btn-block"
                            onclick="window.location='../Dashboard/solicitudpersonal.php'" class="Redirect"
                            value="Fecha" />

                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>