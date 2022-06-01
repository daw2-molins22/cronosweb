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
        <h1>Nuevo Registro De Clientes</h1>

        <form action="insert_clientes.php" method="post">

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Nombre</h6>
                    <input type="text" class="form-control" name="cliente_nombre" id="cliente_nombre">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Sector</h6>
                    <input type="text" name="sectores_id" class="form-control" id="sectores_id">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Tipo Cliente</h6>
                    <input type="text" name="tipos_clientes_id" class="form-control" id="tipos_clientes_id">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Dirección</h6>
                    <input type="text" class="form-control" name="cliente_direccion" id="cliente_direccion">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Codigo Postal</h6>
                    <input type="text" class="form-control" name="cliente_codigo_postal" id="cliente_codigo_postal">
                </div>
            </div>

            <div class="col-12 ml-5 p-2 pt-1">
                <h6 class="font-weight-semibold"><i class=""></i> Fecha Visita</h6>                                                                                
                <div class="form-group">                                                                
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        <input type="text" class="form-control daterange-single" name="cliente_fecha_visita" id="cliente_fecha_visita">
                    </div>
                </div>
            </div>


            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Fax</h6>
                    <input type="text" class="form-control" name="cliente_fax" id="cliente_fax">
                </div>
            </div>

            
            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Telefono</h6>
                    <input type="number" class="form-control" name="cliente_telefono" id="cliente_telefono">
                </div>
            </div>

            <div class="col-md-12">
                <h6 class="font-weight-semibold"><i class=""></i> Estado Del Cliente</h6>
                <input type="radio" id="cliente_activo" name="cliente_activo" value="1"> Activado<br>
                <input type="radio" id="cliente_activo" name="cliente_activo" value="0"> Desactivado
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