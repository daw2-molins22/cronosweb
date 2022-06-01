<?php

include("../../db.php");

$provincia=$_POST['provincia'];

$update= "UPDATE Provincias SET Provincia='$provincia'";

$stmt= sqlsrv_query($conn, $update);

if($stmt){
    header("Location: ../../full/provincias.php");
}else{
    echo "MAL";
}





?>