<?php

include("../../db.php");

$areas_de_negocio=$_POST['areas_de_negocio'];
$areas_de_negocio_activo=$_POST['areas_de_negocio_activo'];


$sql="INSERT INTO Areas_de_Negocio VALUES ('$areas_de_negocio', '$areas_de_negocio_activo')";

$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/areas_de_negocio.php");
}





?>