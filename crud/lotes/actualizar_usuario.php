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
    <?php

    include("../../db.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM Usuarios WHERE Usuarios_ID = '$id'";
    $query=sqlsrv_query($conn, $sql);

    $row=sqlsrv_fetch_array($query);


    ?>

    <div class="container mt-5" style="text-align: center;">
        <h1>Editar Registro De Usuarios</h1>

        <form action="update_usuario.php" method="post">

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Nombre</h6>
                    <input type="text" class="form-control" value="<?php echo $row['Usuarios_Nombre']?>" name="usuarios_nombre" id="usuarios_nombre">
                </div>
            </div>

            <!-- Email -->
            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Email</h6>
                    <input type="email" class="form-control" value="<?php echo $row['Usuarios_Email']?>" name="usuarios_email" id="usuarios_email">
                </div>
            </div>


            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Rol</h6>
                    <input type="text" class="form-control" value="<?php echo $row['Roles_ID']?>" name="roles_id" id="roles_id">
                </div>
            </div>

            <div class="col-12 ml-5 p-2 pt-1">
                <h6 class="font-weight-semibold"><i class=""></i> Fecha Inicio</h6>                                                                                
                <div class="form-group">                                                                
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        <input type="text" class="form-control daterange-single" value="<?php echo $row['Usuarios_Fecha_inicio']?>" name="usuarios_fecha_inicio" id="usuarios_fecha_inicio">
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
                        <input type="text" class="form-control daterange-single" value="<?php echo $row['Usuarios_Fecha_fin']?>" name="usuarios_fecha_fin" id="usuarios_fecha_fin">
                    </div>
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Contraseña</h6>
                    <input type="text" name="usuarios_password" value="<?php echo $row['Usuarios_Password']?>" class="form-control" id="usuarios_password">
                </div>
            </div>


            <div class="col-md-12">
                <h6 class="font-weight-semibold"><i class=""></i> Estado Del Usuario</h6>
                <?php if ( $row['Usuarios_Activo'] == 1 ) { ?>
                <input type="checkbox" name="usuarios_activo" id="usuarios_activo" checked>
                <?php } else { ?>
                <input type="checkbox" name="usuarios_activo" id="usuarios_activo">
                <?php } ?>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Usuario</h6>
                    <input type="text" class="form-control" value="<?php echo $row['Usuarios_Activar_usuario'] ?>" name="usuarios_activar_usuario" id="usuarios_activar_usuario">
                </div>
            </div>

            <div class="col-md-12 p-3">
                <input type="submit" class="btn btn-primary" value="Actualizar">
            </div>


        </form>

    </div>

</body>
</html>