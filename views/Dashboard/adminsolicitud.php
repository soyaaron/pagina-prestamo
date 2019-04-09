<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Vista Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.css">
    <link rel="stylesheet" href="../bootstrap/css/formatos.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body class="skin-green-light layout-top-nav" style=" height: auto; min-height: 100%;">
    <header class="main-header">
        <?php include "navbardentro.php"; ?>
    </header>

    <!-- Reemplazado por el sidebar
    
    <div id="btnsolicitud">
        <div class="col-md-2">
            <div class="box box-danger">

                <div class="box-body">
                    <input type="button" class="btn btn-primary btn-block"
                        onclick="window.location='../Dashboard/solicitudpersonal.php'" class="Redirect"
                        value="Solicitud en persona" />
                    <br>
                    <input type="button" class="btn btn-primary btn-block"
                        onclick="window.location='../Dashboard/solicitudpersonal.php'" class="Redirect"
                        value="Solicitud en persona" />


                </div>
            </div>
        </div>
    </div>
-->


    <div class="row">
        <div class="col-md-5">

            <div class="box box-solid box-warning">
                <div class="box-header">
                    <h3 class="box-title">Solicitudes</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th><input type="button" class="btn btn-primary btn-block"
                                        onclick="window.location='../Dashboard/solicitudpersonal.php'" class="Redirect"
                                        value="Fecha" /></th>
                                <th> </th>
                            </tr>
                            <tr>
                                <td>Juan Perez</td>
                                <td>100,000 RD$</td>
                                <td>dd/mm/aa </td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#VermasUsuario">Ver mas </button>
                                </td>


                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>

            <div class="modal fade" id="VermasUsuario">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Informacion sobre prestamo</h4>
                        </div>
                        <div class="modal-body">


                            <div>

                                <label>Nombre: </label>
                                <input type="text" class="form-control" placeholder="Nombre del usuario"
                                    id="NombreUsuario" readonly>
                                <br>
                                <label>• Prestamo solicitado: </label>
                                <div class="input-group">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text">RD$</span>
                                    </div>
                                    <input type="number" class="form-control" id="monto" readonly>
                                </div>
                                <br>

                                <label>Cedula de identidad:</label>

                                <input type="number" class="form-control" placeholder="Numero de cedula" id="cedula"
                                    readonly>


                                <label for="Nacionalidad">Nacionalidad:</label>

                                <input type="text" class="form-control" placeholder="País" id="nacionalidad" readonly>

                            </div>
                            <h5>• Datos de domicilio: Provincia, municipio, calle, edificio</h5>

                            <div class="row">

                                <div class="col-xs-2">

                                    <input type="text" class="form-control" placeholder="Provincia" id="provincia"
                                        readonly>

                                </div>
                                <div class="col-xs-2">

                                    <input type="text" class="form-control" placeholder="Municipio" id="municipio"
                                        readonly>

                                </div>

                                <div class="col-xs-3">
                                    <input type="text" class="form-control" placeholder="Calle" id="direccion_calle"
                                        readonly>
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" placeholder="Numerp apc/edificio*"
                                        id="apartamento_edificio" readonly>
                                </div>


                            </div>

                            <br>
                            <h5>• Formas de contacto: </h5>

                            <div class="form-row">

                                <div class="col">
                                    <label>Telefono principal* </label>

                                    <!--Entrada telefnono principal-->
                                    <input type="number" class="form-control" id="TelefonoPrincipalUsuario">
                                </div>

                                <div class="col">

                                    <label>Correo electronico* </label>

                                    <!--Entrada correo electronico-->
                                    <input type="text" class="form-control" id="CorreoUsuario">
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col">
                                    <label>Telefono secundario</label>

                                    <!--Entrada telefnono secundario-->
                                    <input type="number" class="form-control" id="TelefonoSecundarioUsuario">
                                </div>


                                <div class="col">

                                    <label>Telefono Oficina</label>

                                    <!--Entrada telefnono oficina-->
                                    <input type="number" class="form-control" id="TelefonoOficinaUsuario">

                                </div>


                            </div>

                            <br>
                            <h5>• Datos laborales: </h5>

                            <div class="form-row">

                                <div class="col">
                                    <label>Nombre de empresa </label>

                                    <!--Entrada Nombre empresa-->

                                    <input type="text" class="form-control" id="NombreEmpresaUsuario">
                                </div>

                                <div class="col">

                                    <label>Actividad economica </label>

                                    <!--Entrada actividad economica-->
                                    <input type="text" class="form-control" id="ActEconomicaUsuario">
                                </div>

                            </div>

                            <label for=""> Telefono de la empresa</label>

                            <!--Entrada telefono empresa empresa-->

                            <input type="text" class="form-control" id="TelefonoEmpresaUsuario">


                            <br>
                            <h5>• Profesión:</h5>

                            <div class="form-row">


                                <div class="col">
                                    <label for=" ">Nombre de empresa </label>

                                    <!--entrada nombre empresa-->
                                    <input type="text" class="form-control" id="NomnbreEmpresa">
                                </div>

                                <div class="col">

                                    <label for=" ">Actividad economica </label>

                                    <!--entrada actividad economica-->
                                    <input type="text" class="form-control" id="ActividadEconomica">
                                </div>

                            </div>


                            <br>
                            <h6>Ingresos: </h6>

                            <div class="form-row">


                                <div class="col">


                                    <label for=" ">Mensual* </label>


                                    <div class="input-group  mt-3">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text">RD$</span>
                                        </div>

                                        <!--entrada ingresos mensual-->
                                        <input type="text" class="form-control" id="IngresosMenUsuarios">
                                    </div>

                                </div>

                                <div class="col">

                                    <label for=" ">Otros ingresos* </label>

                                    <div class="input-group  mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">RD$</span>

                                            <!--entrada otros ingresos-->
                                            <input type="text" class="form-control" id="otrosIngresos">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <h5>• Informacion de garante: </h5>

                            <div class="form-row">
                                <div class="col">
                                    <label for=" ">Nombre* </label>

                                    <!--entrada de nombre garante-->
                                    <input type="text" class="form-control" id="NombreGarante">
                                </div>

                                <div class="col">

                                    <label for=" ">Apellido* </label>

                                    <!--entrada de apellido garante-->
                                    <input type="text" class="form-control" id="ApellidoGarante">
                                </div>

                            </div>

                            <div class="form-row">



                            </div>
                            <label for="Nacionalidad">Nacionalidad:</label>

                            <!--Seleccion de nacionalidad garante-->
                            <select class="custom-select my-1 mr-sm-2" id="NacionalidadGarante">
                                <option selected>Nacionalidad*</option>
                            </select>

                            <div class="col">
                                <label for=" ">Cedula de identidad* </label>

                                <!--entrada  cedula garante-->
                                <input type="number" class="form-control" placeholder="001-00000000000-1"
                                    id="CedulaGarante">
                            </div>





                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-success">Aprobar Prestamo</button>
                            <button type="button" class="btn btn-danger">Negar Prestamo</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <div class="box box-solid box-danger">
                <div class="box-header">
                    <h3 class="box-title">Solicitudes Rechazadas</h3>
                </div>

                <div class="box-body">

                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th> </th>
                            </tr>
                            <tr>
                                <td>Juan Perez</td>
                                <td>100,000 RD$</td>
                                <td>
                                    <button type="button" class="btn btn-flat">Ver mas</button>
                                </td>

                                <td>
                                    <button type="button" class="btn btn-flat">Restaurar </button>
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>



            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Solicitudes aprobadas</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <!-- averiguar porque no colapsa-->
                            <i class="fa fa-minus">Colapsar</i>
                            </buttom>
                    </div>
                </div>
                <div class="box-body">

                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th> </th>
                            </tr>
                            <tr>
                                <td>Juan Perez</td>
                                <td>100,000 RD$</td>
                                <td>
                                    <button type="button" class="btn btn-flat">Ver mas </button>
                                </td>

                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>


    <script src="../dist/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../dist/js/app.js"></script>

</body>

</html>