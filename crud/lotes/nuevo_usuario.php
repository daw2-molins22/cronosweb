<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevos Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5" style="text-align: center;">
        <h1>Nuevo Registro De Usuarios</h1>

        <form action="insert_usuario.php" method="post">

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Nombre</h6>
                    <input type="text" class="form-control" name="usuarios_nombre" id="usuarios_nombre">
                </div>
            </div>

            <!-- Email -->
            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Email</h6>
                    <textarea  id="usuarios_email" type="text" name="usuarios_email" class="form-control" cols="20" rows="1" value=""></textarea><br>
                </div>
            </div>


            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Rol</h6>
                    <textarea  id="roles_id" type="text" name="roles_id" class="form-control" cols="20" rows="1" value=""></textarea><br>
                </div>
            </div>

            <div class="col-12 ml-5 p-2 pt-1">
                <h6 class="font-weight-semibold"><i class=""></i> Fecha Inicio</h6>                                                                                
                <div class="form-group">                                                                
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        <input type="text" class="form-control daterange-single" name="usuarios_fecha_inicio" id="usuarios_fecha_inicio">
                    </div>
                </div>
            </div>

            <div class="col-12 ml-5 p-2 pt-1">
                <h6 class="font-weight-semibold"><i class=""></i> Fecha Fin</h6>                                                                                
                <div class="form-group">                                                                
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        <input type="text" class="form-control daterange-single" name="usuarios_fecha_fin" id="usuarios_fecha_fin">
                    </div>
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Contraseña</h6>
                    <input type="text" name="usuarios_password" class="form-control" id="usuarios_password">
                </div>
            </div>


            <div class="col-md-12">
                <h6 class="font-weight-semibold"><i class=""></i> Estado Del Usuario</h6>
                <!--<form action="insert_peticion_servicio.php" method="post" ></form>
                <input type="radio" id="usuarios_activo" value="1"> Activado <br>
                <input type="radio" id="usuarios_activo" value="0"> Desactivado -->
                <input type="radio" id="usuarios_activo" name="usuarios_activo" value="1"> Activado<br>
                <input type="radio" id="usuarios_activo" name="usuarios_activo" value="0"> Desactivado
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Usuario</h6>
                    <input type="text" class="form-control" name="usuarios_activar_usuario" id="usuarios_activar_usuario">
                </div>
            </div>

            <div class="col-md-12 p-3">
                <input type="submit" class="btn btn-primary">
            </div>


        </form>

    </div>

</body>
</html>

                     


<script>
    /*$("#contenedor_roles").load("/ajax/filtro_usuarios_roles.php?id=selector_roles&multiple=false&update=&clientes="+localStorage.getItem('clientes')+"&motivos=");

    $('.daterange-single').daterangepicker({ 
        singleDatePicker: true,
        locale: {
            format: 'DD-MM-YYYY'
        }
    });*/
</script>