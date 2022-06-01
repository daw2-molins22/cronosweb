<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevas Provincias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5" style="text-align: center;">
        <h1>Nuevas Provincias</h1>

        <form action="insert_provincias.php" method="post">

            <div class="row p-1">
                <div class="col-md-12">
                    <h6 class="font-weight-semibold"><i class=""></i> Provincia</h6>
                    <input type="text" class="form-control" name="provincia" id="provincia">
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