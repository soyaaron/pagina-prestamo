<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/cssmisc.css">
    <title>Prestame</title>

<title>Page Title</title>
</head>
<body>
  <div class="float">
        <div class="container vertical-center mt-5">    
            <div class="card w-50">
                <div class="card-body">
                     <h5 class="card-title">• Registro de Usuario: </h5>


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

                            <h5>• Informacion Login Usuario: </h5>

                                    <label>Nombre de usuario* </label>

                                    <!--Entrada id usuario-->
                                        <input type="text" class="form-control"
                                               id="idUsuario">


                                    <label >Contraseña* </label>

                                    <!--Entrada contrase;a usuario-->
                                        <input type="text" class="form-control"
                                               id="contrasenaUsuario">

                                                <label >Confirmar Contraseña* </label>

                                    <!--Entrada verificacion usuario-->
                                        <input type="text" class="form-control"
                                               id="verficaContrasena">



                            </form>


<!--enviar registro-->
    <a href="#" class="btn btn-primary"
    id="enviarRegistro">Registrarse</a>
  </div>
</div>
</div>
</div>




     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>