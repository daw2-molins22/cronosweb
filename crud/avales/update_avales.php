<?php

include("../../db.php");

$aval_codigo=$_POST['aval_codigo'];
$aval_descripcion=$_POST['aval_descripcion'];

$update= "UPDATE Avales SET Aval_Codigo='$aval_codigo', Aval_Descripción='$aval_descripcion'";

$stmt= sqlsrv_query($conn, $update);

if($stmt){
    header("Location: ../../full/avales.php");
}else{
    echo "MAL";
}





?>