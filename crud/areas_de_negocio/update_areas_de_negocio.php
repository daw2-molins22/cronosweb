<?php

include("../../db.php");

$areas_de_negocio=$_POST['areas_de_negocio'];
$areas_de_negocio_activo=$_POST['areas_de_negocio_activo'];

$update= "UPDATE Areas_de_Negocio SET Areas_de_Negocio='$areas_de_negocio', Areas_de_Negocio_Activo='$areas_de_negocio_activo'";

$stmt= sqlsrv_query($conn, $update);

if($stmt){
    header("Location: ../../full/areas_de_negocio.php");
}else{
    echo "MAL";
}





?>