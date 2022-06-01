<?php

include("../../db.php");

$tipos_clientes=$_POST['tipos_clientes'];


$sql="INSERT INTO Tipos_clientes VALUES ('$tipos_clientes')";

$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/tipos_clientes.php");
}





?>