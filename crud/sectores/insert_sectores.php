<?php

include("../../db.php");

$sectores=$_POST['sectores'];


$sql="INSERT INTO Sectores VALUES ('$sectores')";

$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/sectores.php");
}





?>