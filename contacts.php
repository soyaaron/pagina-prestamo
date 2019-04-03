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
                        <h1 class="display-4">Contactos</h1>
                        <p class="lead">Estamos abiertos para comunicarnos contigo.</p>
                    </div>
                </div>
            </div>
            
            <div id="body" class="m-3">
                <div class="site-section bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 mb-5">
                                <form id="formulario" class="p-5 bg-white">
                                    <div class="row form-group">
                                        <div class="col-md-6 mb-3 mb-md-0">
                        
                                            <label class="text-dark" for="fname" id="nombre">Nombre</label>
                                            <input type="text" id="fname" class="form-control">

                                            <div id="msg1" style="display: none;">
                                                <p class="text-danger">El nombre es requerido</p>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                   
                                            <label class="text-dark" for="lname" id="apellido">Apellido</label>
                                            <input type="text" id="lname" class="form-control">

                                                <div id="msg2" style="display: none;">
                                                    <p class="text-danger">El apellido es requerido</p>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                    
                                        <div class="col-md-12">
                                        
                                            <label class="text-dark" for="email" id="correo">Email</label> 
                                            <input type="email" id="email" class="form-control">

                                            <div id="msg3" style="display: none;">
                                                <p class="text-danger">El correo es requerido</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        
                                        <div class="col-md-12">
                                        
                                            <label class="text-dark" for="subject" id="asunto">Asunto</label> 
                                            <input type="subject" id="subject" class="form-control">
                                            <div id="msg4" style="display: none;">
                                                <p class="text-danger">El Asunto es requerido</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                        
                                            <label class="text-dark" for="message" id="mensaje">Mensaje</label> 
                                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                                            <div id="msg5" style="display: none;">
                                                <p class="text-danger">El mensaje es requerido</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12 ">
                                            <button type="button" class="btn btn-primary py-2 px-4 text-white " id="enviar" >Enviar Mensaje</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5">
                            
                                <div class="p-4 mb-3 bg-white">
                                    <img src="views/dist/icon/ubicacion.png"> <p class="mb-0 font-weight-bold">Dirección</p>
                                    <a href="https://www.google.com/maps/place/Av.+Winston+Churchill,+Santo+Domingo/@18.4716873,-69.9414268,18z/data=!4m5!3m4!1s0x8eaf89e4e5607a45:0x1c209c7418cf0ad4!8m2!3d18.4719606!4d-69.9412095">
                                    <p class="mb-4">Calle Manuel de Jesús Troncoso 46, Santo Domingo</p></a>

                                    <img src="views/dist/icon/telefono.png"> <p class="mb-0 font-weight-bold">Teléfono</p>
                                    <a><p class="mb-4"><a href="#">849-351-2799</a></p>

                                    <img src="views/dist/icon/e-mail.png"> <p class="mb-0 font-weight-bold">Email</p>
                                    <a><p class="mb-0"><a href="#">EnergyES@gmail.com</a></p>
                                </div>
                            
                                <div class="p-4 mb-3 bg-white">
                                    <h3 class="h5 text-black mb-3">Más información</h3>
                                    <p>Puedes hacernos cualquier pregunta que desees, haremos lo mejor posible para responderte lo más rápido posible.</p>              
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