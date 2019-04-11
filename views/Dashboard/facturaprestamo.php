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

<body class="skin-green-light layout-top-nav" style=" height: auto; min-height: 100%;">
    <header class="main-header">
        <?php include "navbardentro.php"; ?>
    </header>
    <?php include "sidebar.php"; ?>

  
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="invoice-title">
                            <h2>Factura</h2>
                            <h3 class="pull-right">Numero de prestamo # id_solicitud</h3>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-md-3 text-right">
                                <address>
                                    <strong>Fecha de pago:</strong><br>
                                    <p id="demo"></p> 
                                </address>
                            </div>                  
                        </div>
                  
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Order summary</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <td><strong>Item</strong></td>
                                                <td class="text-center"><strong>Price</strong></td>
                                                <td class="text-center"><strong>Quantity</strong></td>
                                                <td class="text-right"><strong>Totals</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                            <tr>
                                                <td>BS-200</td>
                                                <td class="text-center">$10.99</td>
                                                <td class="text-center">1</td>
                                                <td class="text-right">$10.99</td>
                                            </tr>
                                            <tr>
                                                <td>BS-400</td>
                                                <td class="text-center">$20.00</td>
                                                <td class="text-center">3</td>
                                                <td class="text-right">$60.00</td>
                                            </tr>
                                            <tr>
                                                <td>BS-1000</td>
                                                <td class="text-center">$600.00</td>
                                                <td class="text-center">1</td>
                                                <td class="text-right">$600.00</td>
                                            </tr>
                                            <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                <td class="thick-line text-right">$670.99</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Shipping</strong></td>
                                                <td class="no-line text-right">$15</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Total</strong></td>
                                                <td class="no-line text-right">$685.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
    <script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>

</body>

</html>