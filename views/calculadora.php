
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Energy Equipment Solutions</title>
    <!--FavIcon--FavIcon--FavIcon--FavIcon--FavIcon--FavIcon--FavIcon--FavIcon-->
    <link rel="shortcut icon" type="image/png" href="dist/img/logo1.png">
    <link rel="stylesheet" href="dist/css/estilos.css">
    <link rel="stylesheet" href="dist/css/font.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class=" " id="back">
    <!--Navbar--Navbar--Navbar--Navbar--Navbar-->
    <?php require "include/navbar.php" ?> 

    <div id="body" class="m-3 bg-light ">

        <div class="col-md-12 p-0">
            <div class="jumbotron jumbotron-fluid" id="parallax">
                <div class="container">
                    <h1 class="display-4">Calculadora</h1>
                    <p class="lead">Aqui puedes previsualizar las tasas y cuentos para el prestamo que deceas realizar</p>
                </div>
            </div>
        </div>

        <div id="body" class="m-3">
                <div class="site-section bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 mb-5">
                                <form id="formulario" class="p-5 bg-white" action = "../controllers/Calculadora_controller.php" method="POST">
                                    <div class="col-md-12 mx-auto">
                                        <h1 class="textcolorpurple"><b> Calculadora de Prestamos</b></h1>
                                        <div class="col-md-5 mx-auto text-black-50">
                                            <h6 class="">Prestamos personales</h6>
                                        </div>
                                        
                                    </div> 
                                    <!--Monto que se va a prestar-->
                                    <div class="row form-group ">
                                        <div class="col-md-8 mb-3 mb-md-0 mx-auto">
                                            <label class="text-dark mx-auto" for="inputMonto">Monto Solicitado</label>
                                            <input type="number" min="1" step="any" class="form-control" id="inputMonto" name="inputMonto" placeholder="" >                                            
                                        </div> 
                                    </div>
                                     <!--Tasa cambiable-->
                                    <div class="row form-group">
                                        <div class="col-md-8 mx-auto">
                                            <label class="text-dark mx-auto" for="inputInteres">Tasa Interes</label>
                                            <input type="number" class="form-control" id="inputInteres" value="<?=$_GET['porciento'];?>" placeholder="<?php 
                                            if(isset($seleccionar)){
                                                print_r($seleccionar);
                                            }else{
                                                
                                                print_r("Inserte el monto, primero");
                                            }
                                            ?>" disabled >     
                                        </div>
                                    </div>
                                    <!--Fecha de los pagos lapso de tiempo-->
                                    <div class="row form-group" >
                                        <div class="col-md-8 btn-group btn-group-toggle mx-auto" data-toggle="buttons" id="inputTiempo">
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" value='opt1' id="option1" autocomplete="off"> 1 Año
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" value='opt2' id="option2" autocomplete="off"> 2 Años
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" value='opt3' id="option3" autocomplete="off"> 3 Años
                                            </label>
                                                
                                        </div>
                                    </div>
                                    <!--Botton calcularr-->
                                    <div class="row form-group">
                                        <div class="col-md-3 mx-auto ">
                                            <button type="submit" class="btn btn-primary py-2 px-4 text-white bgcolorpurple" id="Calcular" >Calcular</button>
                                        </div>
                                    </div>
                                    <br> <br>


                                    <h3 class="textcolorpurple"> <b> Resultado</b></h3>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <h5  id="resultado">
                                                Cuota Mensual
                                                <label class="text-dark" for="">RD$ </label> 
                                                <label class="text-dark" id="total" for=""><?php 
                                            if(isset($mi_var)){
                                                print_r($mi_var);
                                            }else{
                                                echo (isset($_GET['cuota']))? $_GET['cuota'] : "000.000.00" ;
                                            }
                                            ?></label> 
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <h5  id="resultado">
                                                Monto Total
                                                <label class="text-dark" for="">RD$ </label> 
                                                <label class="text-dark" id="total" for=""><?php 
                                            if(isset($mt_oficial)){
                                                print_r($mt_oficial);
                                            }else{
                                                echo (isset($_GET['montoo']))? $_GET['montoo'] : "000.000.00" ;
                                            }
                                            ?></label> 
                                            </h5>
                                        </div>
                                    </div>
                                    <p class="text-justify">Esta información es una proyección, la cual puede variar por diversas razones, tales como: Atraso, pagos incompletos,
                                     abonos extraordinarios a capital, etc.</p>
                                </form>
                                <div class="col-md-12">
                                    
                                </div>
                            </div>


                            <div class="col-md-5">
                            
                                <div class="p-4 mb-3">
                                <h4>Política de Tasas Actuall</h4>
                                    <ul>
                                        <p>
                                            35% para menos o igual a 25,000 pesos. <br>
                                            30% para mas de 25,000 y menos o igual a 75,000 pesos.<br>
                                            25% para mas de 75,000 y menos o igual a 125,000 pesos.<br>
                                            20% para mas de 125,000 y menos o igual a 250,000 pesos.<br>
                                            15% para mas de 250,000 y menos o igual a 500,000 pesos.
                                        </p>
                                    </ul>
                                </div>
                            <!--
                                <div class="p-4 mb-3 bg-white">
                                    <h3 class="h5 text-black mb-3">Más información</h3>
                                    <p>lorem.</p>              
                                </div>
                                        -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
    </div>
    <!--Footer--Footer--Footer--Footer--Footer-->
    <?php require "include/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>