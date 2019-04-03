<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Energy Equipment Solutions</title>
    <!--FavIcon--FavIcon--FavIcon--FavIcon--FavIcon--FavIcon--FavIcon--FavIcon-->
    <link rel="shortcut icon" type="image/png" href="views/dist/img/logo1.png">
    <link rel="stylesheet" href="views/dist/css/estilos.css">
    <link rel="stylesheet" href="views/dist/css/font.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class=" " id="back">
    <!--Navbar--Navbar--Navbar--Navbar--Navbar-->
    <?php require "views/include/navbar.php" ?>

        
        <div class="col-md-12 p-0">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Calculadora</h1>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ducimus aliquam sint repellat, cum, voluptatem necessitatibus ratione ipsum beatae nobis facilis quos? Quod sunt sit perferendis dolorem ratione, incidunt autem!</p>
                </div>
            </div>
        </div>
        <div class="col-md-12" >
                <div id="body" class="m-3 ">
                
                    <h1>Datos Calculadora</h1>

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputMonto">MONTO A SOLICITAR</label>
                                <input type="number" min="1" step="any" class="form-control" id="inputMonto" placeholder="Monto" >
                                </div>
                            <div class="form-group col-md-6">
                                <label for="inputInteres">TASA DE INTERES %</label>
                                <input type="number" class="form-control" id="inputInteres" placeholder="Interes" disabled>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <legend class="row-form-label row-sm-2 pt-0">PLAZO DE PAGO</legend>
                                <div class="row-sm-10">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3 Meses</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">6 Meses</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">1+ Años</label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                            <button type="button" class="btn btn-primary">Primary</button>
                            </div>
</div>
                    </form>

                    <h3>CUOTA MENSUAL: <label for="">RD$ </label> <label for>0000.00</label> </h3>

                    
                    
                </div>
            </div>
        </div>
    <!--Footer--Footer--Footer--Footer--Footer-->
    <?php require "views/include/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>