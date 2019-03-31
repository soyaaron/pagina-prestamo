<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../dist/css/registro.css">
    <title>Document</title>
</head>
<body>
    <!-- multistep form -->
<form action="../../controllers/registro_controler.php" method="POST" id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Configuracion de cuenta</li>
      <li>Datos personales</li>
      <li>Datos del trabajo</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <a href="index.php" class="float-right">
            Atras
            </a>
      <h2 class="fs-title">Crea tu cuenta</h2>
      <h3 class="fs-subtitle">Paso 1</h3>
      <input type="text" name="email" placeholder="Email" />
      <input type="password" name="pass" placeholder="Password" />
      <input type="password" name="cpass" placeholder="Confirm Password" />
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Datos Personales</h2>
      <h3 class="fs-subtitle"></h3>
      <input type="text" name="nombre" placeholder="Nombre" />
      <input type="text" name="apellido" placeholder="Apellido" />
      <input type="date" name="fechaNacimiento" placeholder="Nacimiento" />
      <input type="text" name="cedula" placeholder="Cedula" />
      <input type="text" name="genero" placeholder="Genero" />
      <input type="text" name="estadoCivil" placeholder="Estado civil" />
      <input type="tel" name="telefono" placeholder="Telefono" />
      <input type="text" name="nacionalidad" placeholder="Nacionalidad" />
      <input type="text" name="calle" placeholder="Calle" />
      <input type="text" name="apartamento" placeholder="Apartamento" />
      <input type="text" name="provincia" placeholder="Provincia" />
      <input type="text" name="municipio" placeholder="Municipio" />
      <input type="button" name="previous" class="previous action-button" value="Anterior" />
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Datos del trabajo</h2>
      <h3 class="fs-subtitle"></h3>
      <input type="text" name="empresa" placeholder="Empresa" />
      <input type="text" name="actividadLaboral" placeholder="Actividad laboral" />
      <input type="tel" name="telefonoTrabajo" placeholder="Telefono" />
      <input type="text" name="anios" placeholder="Años" />
      <input type="text" name="meses" placeholder="Meses" />
      <input type="text" name="sueldo" placeholder="Sueldo" />
      <input type="text" name="direccionCalleTrabajo" placeholder="Direccion" />
      <input type="text" name="provinciaTrabajo" placeholder="Provincia" />
      <input type="text" name="municipioTrabajo" placeholder="Municipio" />
      <!---
      <input type="text" name="fname" placeholder="First Name" />
      <input type="text" name="lname" placeholder="Last Name" />
      <input type="text" name="phone" placeholder="Phone" />
      <textarea name="address" placeholder="Address"></textarea>-->
      <input type="button" name="previous" class="previous action-button" value="Anterior" />
      <input type="submit" name="submit" class="submit action-button" value="Enviar" />
    </fieldset>
  </form>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" crossorigin="anonymous"></script>
  <script src="../dist/js/registro.js"></script>
</body>
</html>