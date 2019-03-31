<!DOCTYPE HTML>
<html lang="en">
	<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/cssmisc.css">
    <title>Prestame</title>


</head>


<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Prestame</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/views/vistas user/login.html">Solicitar</a>
                </li>

        </div>
    </nav>

    <div class="float">
        <div class="container vertical-center mt-5">
            <div class="card w-50">
                <div class="card-body">
                    <h4 class="card-title">Solicitud de Prestamo</h4>
                    <p class="card-text">Los campos con * son obligatorios.</p>

                    <h5>• Datos Personales: </h5>

                    <form>

                        <div class="form-row">
                            <div class="col">
                                <label>Nombres* </label>

                                <!----entrada de nombre-->
                                    <input type="text" class="form-control" placeholder="Primer y Segundo Nombre" id="NombreUsuario">
                            </div>

                            <div class="col">

                                <label>Apellido* </label>

                                <!--entrada de apellido-->
                                    <input type="text" class="form-control" placeholder="Apellidos" id="ApellidoUsuario">
                            </div>

                        </div>

                        <div class="form-row">

                            <!--Seleccion de sexo-->
                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" id="SexoUsuario">
                                    <option selected>Sexo</option>

                                    <option selected>Masculino</option>
                                    <option selected>Femenino</option>


                                </select>

                                <!--Seleccion de estado civil-->
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                        <option selected id="SexoUsuario">Estado civil*</option>

                                        <option selected id="usuariocasado">Casado</option>
                                        <option selected id="usuariosoltero">Soltero</option>



                                    </select>


                        </div>
                        <label for="Nacionalidad">Nacionalidad:</label>

                        <!--Seleccion de nacionalidad-->
                            <select class="custom-select my-1 mr-sm-2" id="Unio">
                                <option selected>Nacionalidad*</option>
                            </select>

                            <div class="col">
                                <label >Cedula de identidad* </label>

                                <!--entrada numerica cedula-->
                                    <input type="number" class="form-control" placeholder="001-00000000000-1" id="Cedulausuario">
                            </div>

                            <br>
                            <h5>• Datos de domicilio: </h5>

                            <div class="form-row">
                                <div class="col">

                                    <!--entrada calle-->
                                        <input type="text" class="form-control" placeholder="Calle*" id="calleusuario">
                                </div>

                                <div class="col">

                                    <!--entrada numero casa/edificio--> <input type="text" class="form-control" placeholder="Numerp apc/edificio*" id="Numerodireccion">
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="col">

                                    <label >Provincia* </label>

                                    <!--entrada provincia-->

                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" placeholder="Provincia" id="ProvinciaUsuario">


                                        </select>
                                </div>
                                <div class="col">

                                    <label>Ciudad* </label>

                                    <!--entrada ciudad-->

                                        <select class="custom-select my-1 mr-sm-2" id="CiudadUsuario">
                                            <option selected>Ciudad*</option>


                                        </select>


                                </div>
                            </div>

                            <br>
                            <h5>• Formas de contacto: </h5>

                            <div class="form-row">

                                <div class="col">
                                    <label >Telefono principal* </label>

                                    <!--Entrada telefnono principal-->
                                        <input type="number" class="form-control"
                                               id="TelefonoPrincipalUsuario">
                                </div>

                                <div class="col">

                                    <label >Correo electronico* </label>

                                    <!--Entrada correo electronico-->
                                        <input type="text" class="form-control"
                                               id="CorreoUsuario">
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col">
                                    <label >Telefono secundario</label>

                                    <!--Entrada telefnono secundario-->
                                        <input type="number" class="form-control"
                                               id="TelefonoSecundarioUsuario">
                                </div>


                                <div class="col">

                                    <label >Telefono Oficina</label>

                                    <!--Entrada telefnono oficina-->
                                        <input type="number" class="form-control"
                                               id="TelefonoOficinaUsuario">

                                </div>


                            </div>

                            <br>
                            <h5>• Datos laborales: </h5>

                            <div class="form-row">

                                <div class="col">
                                    <label >Nombre de empresa </label>

                                    <!--Entrada Nombre empresa-->

                                        <input type="text" class="form-control"
                                               id="NombreEmpresaUsuario">
                                </div>

                                <div class="col">

                                    <label >Actividad economica </label>

                                    <!--Entrada actividad economica-->
                                        <input type="text" class="form-control"
                                               id="ActEconomicaUsuario">
                                </div>

                            </div>

                            <label for=""> Telefono de la empresa</label>

                            <!--Entrada telefono empresa empresa-->

                                <input type="text" class="form-control"
                                       id="TelefonoEmpresaUsuario">


                                <br>
                                <h5>• Profesión:</h5>

                                <div class="form-row">


                                    <div class="col">
                                        <label for=" ">Nombre de empresa </label>

                                        <!--entrada nombre empresa-->
                                            <input type="text" class="form-control"
                                                   id="NomnbreEmpresa">
                                    </div>

                                    <div class="col">

                                        <label for=" ">Actividad economica </label>

                                        <!--entrada actividad economica-->
                                            <input type="text" class="form-control"
                                                   id="ActividadEconomica">
                                    </div>

                                </div>


                                <br>
                                <h6>Ingresos: </h6>

                                <div class="form-row">


                                    <div class="col">


                                        <label for=" ">Mensual* </label>


                                            <div class="input-group  mt-3"
                                                >

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">RD$</span>
                                                </div>

                                                <!--entrada ingresos mensual-->
                                                    <input type="text" class="form-control"
                                                            id="IngresosMenUsuarios">
                                            </div>

                                    </div>

                                    <div class="col">

                                        <label for=" ">Otros ingresos* </label>

                                        <div class="input-group  mt-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">RD$</span>

                                                <!--entrada otros ingresos-->
                                                    <input type="text" class="form-control" 
                                                           id="otrosIngresos">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <h5>• Informacion de garante: </h5>

                                <div class="form-row">
                                    <div class="col">
                                        <label for=" ">Nombre* </label>

                                        <!--entrada de nombre garante-->
                                            <input type="text" class="form-control"
                                                   id="NombreGarante">
                                    </div>

                                    <div class="col">

                                        <label for=" ">Apellido* </label>

                                        <!--entrada de apellido garante-->
                                            <input type="text" class="form-control"
                                                   id="ApellidoGarante">
                                    </div>

                                </div>

                                <div class="form-row">

                                    <!--Seleccion de sexo garante-->
                                        <select class="custom-select my-1 mr-sm-2" 
                                                id="SexoGarante">
                                            <option selected>Sexo</option>

                                            <option selected>Masculino</option>
                                            <option selected>Femenino</option>


                                        </select>

                                        <!--Seleccion de estado civil garante-->
                                            <select class="custom-select my-1 mr-sm-2" 
                                                    id="EstadoCivilGarante">
                                                <option selected>Estado civil*</option>

                                                <option selected>Casado</option>
                                                <option selected>Soltero</option>



                                            </select>


                                </div>
                                <label for="Nacionalidad">Nacionalidad:</label>

                                <!--Seleccion de nacionalidad garante-->
                                    <select class="custom-select my-1 mr-sm-2" 
                                            id="NacionalidadGarante">
                                        <option selected>Nacionalidad*</option>
                                    </select>

                                    <div class="col">
                                        <label for=" ">Cedula de identidad* </label>

                                        <!--entrada  cedula garante-->
                                            <input type="number" class="form-control" placeholder="001-00000000000-1"
                                                  id="CedulaGarante" >
                                    </div>



                                    <br>
                                    <h5>• Prestamo deseado: </h5>


                                    <div class="input-group">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text">RD$</span>
                                        </div>

                                        <!--entrada prestamo deseado-->
                                            <input type="number" class="form-control"
                                                   id="PrestamoSolicitado">
                                    </div>


                    </form>

                    <!--boton enviar solicitud prestamo-->

                        <button class="btn btn-primary m-3" type="submit" id="EnviarFormulario">Enviar Solicitud</button>

                </div>
            </div>
        </div>
    </div>
    </div>
    
    
    <!--calcular prestamos-->
    <div class="container h-100">
        <div class="float-right d-flex">
            


                <div class="card" style="width: 18rem; margin-right: 3rem;">


                    <div class="card-body">

                        <h5 class="card-title">Calculadora de prestamos</h5>



                        <div class="input-group  mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <!--entrada cantidad prestamo-->
                                <input id="cantidadPrestamo" type="number" class="form-control" placeholder="Cantidad de prestamo">

                        </div>

                        <!--entrada de plazo-->

                            <div class="dropdown mt-3">
                                <div class="input-group-prepend">

                                    <span class="input-group-text" id="cantidadprestamo">#</span>

                                    <input id="PlazoPrestamo" type="number" class="form-control" placeholder="Plazo">

                        </div>
                                    
                                </div>

                            </div>


                           <!-- boton para aceptar y calcular prestamo-->

                                <button type="button" class="btn btn-info mt-3" onclick="aceptarcalculo()">
                                    Aceptar</button>

                                <!-- salida resultado de calculo de prestamo-->

                                    <h6 class="text mt-3">Resultado:</h6>
                                    <h6 id="resultadocalculo"></h6>
                                    <h6 id="resultadoaceptar"></h6>

                    </div>
                </div>
            </div>
    
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>