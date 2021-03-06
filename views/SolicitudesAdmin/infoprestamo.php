<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Vista Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.css">
    <link rel="stylesheet" href="../bootstrap/css/formatos.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body class="skin-green-light layout-top-nav" style=" height: auto; min-height: 100%;">
    <header class="main-header">
        <?php include "../dashboard/navbardentro.php"; ?>
    </header>

    <?php include "../dashboard/sidebar.php"; ?>
    <div class="row">
        <div class="form-group col-md-5">

            <form data-toggle="boostrapValidate">
                <h2>Solicitud: </h2><br>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Nombre </label>
                    <input readonly type="text" id="Nombre" placeholder="Nombre" class="form-control" style="width:120%;	border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5">
                    <label>apellido </label>
                    <input readonly type="text" id="Apellido" placeholder="Apellido" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-4" style="margin-left:20px;">
                    <label> Fecha</label>
                    <input readonly type="date" id="fecha" placeholder="Fecha en que realizo el prestamo"
                        class="form-control" style="width:115%; margin-right:20%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">

                </div>
                <div class="form-group col-md-1 " style=" margin-right:20px;">
                    <label for="">sexo</label>
                    <input readonly type="text" id="sexo" placeholder="sexo usuario" class="form-control" style="width:115%; margin-right:20%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>

                <div class="form-group col-md-12" style="margin-left:20px;">
                    <label for="">Estado Civil</label>
                    <input readonly type="text" id="estado_civil" placeholder="Estado civil" class="form-control" style="width:115%; margin-right:20%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>

                <div class="form-group col-md-6" Style="margin-left:17px;">
                    <label style="margin-left:5px;"> Cedula de identidad </label>
                    <input readonly type="Number" id="tiempo" placeholder="cedula de identidad" class="form-control"
                        style="margin-left:5px;border: 2px solid ;
	border-radius: 4px;
  outline: none;">

                </div>
                <div class="form-group col-md-6" Style="margin-left:17px;">
                    <h3>Direccion domicilio <h3>


                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Calle </label>
                    <input readonly type="text" id="calle" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>

                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Numero de casa/dep</label>
                    <input readonly type="Number" id="Num/cas" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>provincia </label>
                    <input readonly type="text" id="provinvia" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>municipio</label>
                    <input readonly type="text" id="municipio" placeholder="Municipio" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-6" Style="margin-left:17px;">
                    <h3>Formas de contacto<h3>

                </div>

                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Telefono de casa </label>
                    <input readonly type="Number" id="tel/cas" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>

                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label> tel/Oficina</label>
                    <input readonly type="Number" id="tel/ofic" placeholder="Nombre" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>celular </label>
                    <input readonly type="Number" id="cel" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Correo Electronico</label>
                    <input readonly type="e-mail" id="correo" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>

                <div class="form-group col-md-6" Style="margin-left:17px;">
                    <h3>Pariente cercano<h3>


                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Nombre </label>
                    <input readonly type="text" id="Nombre_pariente" placeholder="Nombre" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>


                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>apellido </label>
                    <input readonly type="text" id="Apellido/par" placeholder="Apellido" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Parentesco</label>
                    <input readonly type="text" id="Parentesco" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Telefono</label>
                    <input readonly type="Number" id="Tel/pariente" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-6" Style="margin-left:17px;">
                    <h4>Datos Laborales<h4>


                </div>
                <div class="form-group col-md-6" Style="margin-left:17px;">
                    <h3>Sobre la empresa<h3>


                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Nombre de empresa </label>
                    <input readonly type="text" id="Nombre/empre" placeholder="Nombre" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>

                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Actividad laboral </label>
                    <input readonly type="text" id="trabajo" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>telefono </label>
                    <input readonly type="text" id="telefono/empre" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>ingresos mensual
                    </label>
                    <input readonly type="Number" id="Ingreso" placeholder="Ingreso" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-6" Style="margin-left:17px;">
                    <h3>Direccion trabajo<h3>


                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Calle </label>
                    <input readonly type="text" id="calle/trab" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>

                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>Numero de casa/dep</label>
                    <input readonly type="Number" id="Num/trab" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>provincia </label>
                    <input readonly type="text" id="provinvia/trab" placeholder="" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <div class="form-group col-md-5" style="margin-right:17px;margin-left:17px;">
                    <label>municipio</label>
                    <input readonly type="text" id="municipio/trab" placeholder="Municipio" class="form-control" style="width:120%;border: 2px solid ;
	border-radius: 4px;
  outline: none;">
                </div>
                <br>

            </form>

        </div>


    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>