<?php
require_once "../../model/Admin_model.php";
 $conexion = new Admin_model;
 $clientes = $conexion->users();
?>

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
    <?php include "sidebar.php"; ?>


    <div class="row ">

        <div class="col-md-5">
            
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Todos los clientes</h3>
                </div>
                <div class="box-body">
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Cedula</th>
                                <th>Sexo</th>
                                <th>Nacionalidad</th>
                                <th>Estrellas</th>

                            </tr>
                            <?php foreach ($clientes as $user) {?>          
                            <tr>
                                <td><?php echo $user['nombre']; ?></td>
                                <td><?php echo $user["apellido"] ?></td>
                                <td><?php echo $user["cedula"] ?></td>
                                <td><?php echo $user["sexo"] ?></td>
                                <td><?php echo $user["nacionalidad"] ?></td>
                                <td>estrellas / <b>5</b> ⭐</td>
                                <td><a class="btn btn-default" href="perfilcliente.php">ver mas</a></td>
                            </tr>
                            <?php }?>
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