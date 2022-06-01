<?php

include("../../db.php");

$empresa=$_POST['empresa'];


$sql="INSERT INTO Empresas VALUES ('$empresa')";

$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/empresas.php");
}





?>