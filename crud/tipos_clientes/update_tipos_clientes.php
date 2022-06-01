<?php

include("../../db.php");

$tipos_clientes=$_POST['tipos_clientes'];


$update= "UPDATE Tipos_clientes SET Tipos_clientes='$tipos_clientes'";

$stmt= sqlsrv_query($conn, $update);

if($stmt){
    header("Location: ../../full/tipos_clientes.php");
}else{
    echo "MAL";
}





?>