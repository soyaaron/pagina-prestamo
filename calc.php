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

    <div id="body" class="m-3 ">

        <div class="col-md-12 p-0">
            <div class="jumbotron jumbotron-fluid" id="parallax">
                <div class="container">
                    <h1 class="display-4">Calculadora</h1>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ducimus aliquam sint repellat, cum, voluptatem necessitatibus ratione ipsum beatae nobis facilis quos? Quod sunt sit perferendis dolorem ratione, incidunt autem!</p>
                </div>
            </div>
        </div>

        <div id="body" class="m-3">
                <div class="site-section bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 mb-5">
                                <form id="formulario" class="p-5 bg-white" action = "controllers/Calculadora_controller.php" method="POST">

                                    <h1>Vista previa del prestamo</h1>

                                    <div class="row form-group">

                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <label class="text-dark" for="inputMonto">MONTO A SOLICITAR</label>
                                            <input type="number" min="1" step="any" class="form-control" id="inputMonto" name="inputMonto" placeholder="Monto" >                                            
                                        </div>

                                        <div class="col-md-6">
                   
                                            <label class="text-dark" for="inputInteres">TASA DE INTERES %</label>
                                            <input type="number" class="form-control" id="inputInteres"  placeholder="Interes" disabled >     
                                        </div>

                                    </div>
                                    

                                    <div class="row form-group">
                                        <div class="col-md-12 btn-group btn-group-toggle" data-toggle="buttons" id="mlabel  ">
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option1" autocomplete="off" > 1 Año
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option2" autocomplete="off"> 2 Años
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option3" autocomplete="off"> 3 Años
                                            </label>
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-7">
                                            <h5>CUOTA MENSUAL: </h5>
                                        </div>

                                        <div class="col-md-7">
                                        <!--poner el valor del total-->
                                            <h5><label class="text-dark" for="">RD$ </label> <label id="total" for="">000.00</label> </h5>
                                        </div>
                                        
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary py-2 px-4 text-white" id="Calcular" >Calcular</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5">
                            
                                <div class="p-4 mb-3 bg-white">
                                <h4>Tasa de prestamo</h4>
                                    <ul>
                                        <li>A, para menos o igual a 25,000 pesos</li>
                                        <li>B, para mas de 25,000 y menos o igual a 75,000 pesos</li>
                                        <li>C, para mas de 75,000 y menos o igual a 125,000 pesos</li>
                                        <li>D, para mas de 125,000 y menos o igual a 250,000 pesos</li>
                                        <li>E, para mas de 250,000 y menos o igual a 500,000 pesos</li>
                                    </ul>
                                </div>
                            
                                <div class="p-4 mb-3 bg-white">
                                    <h3 class="h5 text-black mb-3">Más información</h3>
                                    <p>lorem.</p>              
                                </div>
                            </div>
                        </div>
                    </div>
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