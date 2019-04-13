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

<body>
    <!--Navbar--Navbar--Navbar--Navbar--Navbar-->
    <?php require "views/include/IndexNavbar.php" ?>

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3 "></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img src="views/dist/img/slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Compra tu carro deseado!</h5>
                    <p>Facilidades para comprar el vehiculo que deseas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="views/dist/img/slide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Compra tu casa deseado!</h5>
                    <p>Facilidades para comprar tu casa, con las tasas mas bajas del mercado que deseas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="views/dist/img/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Efectivo!</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="views/dist/img/slide4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Todo al alcance de tus manos</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">

        <div class="col-md-10 mx-auto">
        <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"> Préstamo de Consumo Personal <span class="text-muted"></span></h2>
                    <p class="lead">Nuestro Préstamo de Consumo Personal está dirigido a quienes deseen satisfacer necesidades de consumo como la compra de electrodomésticos, vehículos, computadoras, pago de gastos médicos y viajes.
                    Ponemos a disposición la opción de pagar las cuotas de tu préstamo a través de transferencias desde tus cuentas.</p>
                </div>
                <div class="col-md-5">
                    <img id="imgindex" src="views/dist/img/imgindex1.jpg" alt="">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Seguridad <span class="text-muted">Nosotros nos encargamos.</span></h2>
                    <p class="lead">Realize la transacion de forma totalmente seguro Nosotros mismos nos encargamos de dar mantenimiento,y asi sus solicitudes seran procesadas de manera seguro y eficas, y ademas 

Ponemos a tu disposición esta facilidad que te   ayuda a satisfacer tus necesidades de financiamiento como consolidación de deudas, compra de electrodomésticos y equipos tecnológicos, salud, viajes o cualquier otro propósito que consideres importante. Úsalo para consolidar tus deudas, vacacionar o pagar tus estudios. 
                    </p>
                </div>
                <div class="col-md-5">
                    <img id="imgindex" src="views/dist/img/imgindex2.jpg" alt="">
                </div>
            </div>
            <br>
        </div>
    </div>

    <!--Footer--Footer--Footer--Footer--Footer-->
    <?php require "views/include/IndexFooter.php" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>