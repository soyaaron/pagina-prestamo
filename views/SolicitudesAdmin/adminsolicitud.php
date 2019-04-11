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

<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <?php include '../dashboard/navbardentro.php'; ?>
    </header>
    <?php include '../dashboard/sidebar.php'; ?>
    
<div classs="content-wrapper">
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
                                <td><a type="button" class="btn btn-default" href="infoprestamo.php">Ver mas </a></td>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </div>
<div>
    <!--content wrapper-->
</div>
<!--wrapper-->

    <script src="../dist/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../dist/js/app.js"></script>

</body>

</html>