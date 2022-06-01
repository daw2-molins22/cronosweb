<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php

    include("../../db.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM Clientes WHERE Cliente_ID = '$id'";
    $query=sqlsrv_query($conn, $sql);

    $row=sqlsrv_fetch_array($query);


    ?>

    <div class="container mt-5" style="text-align: center;">
        <h1>Editar Clientes</h1>

        <form action="update_clientes.php" method="post">

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Nombre</h6>
                    <input type="text" class="form-control" value="<?php echo $row['Cliente_Nombre']?>" name="cliente_nombre" id="cliente_nombre">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Sector</h6>
                    <input type="text" name="sectores_id" value="<?php echo $row['Sectores_ID']?>" class="form-control" id="sectores_id">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Tipo Cliente</h6>
                    <input type="text" name="tipos_clientes_id" value="<?php echo $row['Tipos_clientes_ID']?>" class="form-control" id="tipos_clientes_id">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Dirección</h6>
                    <input type="text" class="form-control" value="<?php echo $row['Cliente_Direccion']?>" name="cliente_direccion" id="cliente_direccion">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Codigo Postal</h6>
                    <input type="text" class="form-control" value="<?php echo $row['Cliente_Codigo_Postal']?>" name="cliente_codigo_postal" id="cliente_codigo_postal">
                </div>
            </div>

            <div class="col-12 ml-5 p-2 pt-1">
                <h6 class="font-weight-semibold"><i class=""></i> Fecha Visita</h6>                                                                                
                <div class="form-group">                                                                
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        <input type="text" class="form-control daterange-single" value="<?php echo $row['Cliente_Fecha_visita']?>" name="cliente_fecha_visita" id="cliente_fecha_visita">
                    </div>
                </div>
            </div>


            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Fax</h6>
                    <input type="text" class="form-control" value="<?php echo $row['Cliente_Fax']?>" name="cliente_fax" id="cliente_fax">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Telefono</h6>
                    <input type="number" class="form-control" value="<?php echo $row['Cliente_Telefono']?>" name="cliente_telefono" id="cliente_telefono">
                </div>
            </div>


            <div class="col-md-12">
                <h6 class="font-weight-semibold"><i class=""></i> Estado Del Cliente</h6>
                <?php if ( $row['Cliente_Activo'] == 1 ) { ?>
                <input type="checkbox" name="cliente_activo" id="cliente_activo" checked>
                <?php } else { ?>
                <input type="checkbox" name="cliente_activo" id="cliente_activo">
                <?php } ?>
            </div>           

            <div class="col-md-12 p-3">
                <input type="submit" class="btn btn-primary" value="Actualizar">
            </div>


        </form>

    </div>

</body>
</html>