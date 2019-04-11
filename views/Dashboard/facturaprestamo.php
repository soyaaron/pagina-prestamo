<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Vista Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.css">
    <link rel="stylesheet" href="../bootstrap/css/formatofactura.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body class="skin-green-light layout-top-nav">
    <header class="main-header">
        <?php include "navbardentro.php"; ?>
    </header>
    <?php include "sidebar.php"; ?>


    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="invoice-title">
                    <h2>Factura</h2>
                </div>
                <br>
                <div class="col-md-3 text-right">
                    <address>
                        <strong>Fecha de pago:</strong><br>
                        <?php  echo date("l d-m-y"); ?>
                    </address>
                </div>
                <div class="col-md-3 text-right">
                    <address>
                        <strong># Prestamo: </strong><br>
                        id_prestamo
                    </address>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Resumen</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td class="text-center"><strong>Cuota Menual</strong></td>
                                        <td class="text-center"><strong>Mora</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="text-center">cuota</td>
                                        <td class="text-center">monto_mora</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line text-center"><strong>Subtotal cuota</strong></td>
                                        <td class="thick-line text-right">cuota</td>
                                    </tr>

                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Subtotal Mora</strong></td>
                                        <td class="no-line text-right">monto_mora</td>
                                    </tr>

                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Total</strong></td>
                                        <td class="no-line text-right">monto_mora + cuota</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" >Aceptar pago</button>
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