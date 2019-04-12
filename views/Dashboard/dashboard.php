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

<body class="skin-green-light layout-top-nav">
        <header class="main-header">
        <?php include "navbardentro.php"; ?>
    </header>
    <?php include "sidebar.php"; ?>

    <div class="row">
        <div class="col-md-5">

            <!-- solicitudes mas recientes-->
            <div class="box box-solid box-warning">
                <div class="box-header">
                    <h3 class="box-title">Solicitud recientes</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Tiempo</th>
                                <th>Descripcion</th>
                                <th>Fecha</th>

                            </tr>
                            <tr>
                                <td>id_usuario_solicitante</td>
                                <td>monto</td>
                                <td>tiempo</td>
                                <td>descripcion</td>
                                <td>fecha </td>
                                <td><a  type="button" class="btn btn-default" href="../SolicitudesAdmin/infoprestamo.php">Ver mas </a></td>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>

            <!-- aqui van los usuarios que estan tarde-->
            <div class="box box-solid box-warning">
                <div class="box-header">
                    <h3 class="box-title">Prestamos atrasados</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Monto a pagar</th>
                                    <th>Monto de mora</th>
                                    <th>Monto pagado</th>
                                    <th>Fecha de pago</th>
                                    <th>Dias de retraso</th>
                                    <th></th>

                                </tr>
                                <tr>
                                    <td>id_usuario_solicitante</td>
                                    <td>monto_Pagar</td>
                                    <td>monto_mora</td>
                                    <td>monto_Pagado</td>
                                    <td>fecha_pago</td>
                                    <td>dias_atraso_pago</td>
                                    <td><a class="btn btn-default" href="../prestamosadmin/facturaprestamo.php"
                                            type="button">Cobrar prestamo </a></td>


                                </tr>
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
            </script>
</body>

</html>