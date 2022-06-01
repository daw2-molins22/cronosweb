<?php

include("../../db.php");

$aval_codigo=$_POST['aval_codigo'];
$aval_descripcion=$_POST['aval_descripcion'];

$sql="INSERT INTO Avales VALUES ('$aval_codigo', '$aval_descripcion')";

$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/avales.php");
}





?>