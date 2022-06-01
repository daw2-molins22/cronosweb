<?php

include("../../db.php");

$provincia=$_POST['provincia'];


$sql="INSERT INTO Provincias VALUES ('$provincia')";

$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/provincias.php");
}





?>