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

    <body class="skin-green-light layout-top-nav">
        <header class="main-header">
        <?php include "navbardentro.php"; ?>
        </header>
        
        <div class="row">
            <div class="col-md-4">

            <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Actualizar tasas</h3>
                    </div>
                        <div class="box-body">
                  
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Ingrese cantidad deseada">
                            <span class="input-group-addon" id="basic-addon2">%</span>
                            </div>

                           <br> <button  onclick="alertatasa()" class="btn btn-success" type="button" id="aceptartasa">Aceptar</button>

                         </div>

                </div>  

                    <div class="box box-solid box-success">
                        <div class="box-header">
                            <h3 class="box-title">Historial de tasas</h3>
                           
                        </div>
                            <div class="box-body">
                            
                            <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Porciento</th>
                                                <th> </th>
                                            </tr>
                                            <tr>
                                                <td>Un dia </td>
                                                <td>un numero</td>
                                        
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                             </div>

                
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
        <script src="../dist/js/app.js"></script>
<script>
    function alertatasa(){
        confirm("Esta seguro que desea aceptar?");
    }
    </script>
     </body>
</html>
