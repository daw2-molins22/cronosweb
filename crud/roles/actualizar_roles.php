<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Roles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php

    include("../../db.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM Roles WHERE Roles_ID = '$id'";
    $query=sqlsrv_query($conn, $sql);

    $row=sqlsrv_fetch_array($query);


    ?>

    <div class="container mt-5" style="text-align: center;">
        <h1>Editar Rol</h1>

        <form action="update_roles.php" method="post">

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Rol</h6>
                    <input type="text" class="form-control" value="<?php echo $row['Roles_Descripcion']?>" name="roles_descripcion" id="roles_descripcion">
                </div>
            </div>

            <div class="col-md-12">
                <h6 class="font-weight-semibold"><i class=""></i> Estado Del Rol</h6>
                <?php if ( $row['Roles_Activo'] == 1 ) { ?>
                <input type="checkbox" name="roles_activo" id="roles_activo" checked>
                <?php } else { ?>
                <input type="checkbox" name="roles_activo" id="roles_activo">
                <?php } ?>
            </div>

            
            <div class="col-md-12 p-3">
                <input type="submit" class="btn btn-primary" value="Actualizar">
            </div>

        </form>

    </div>

</body>
</html>