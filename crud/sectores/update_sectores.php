<?php

include("../../db.php");

$sectores=$_POST['sectores'];


$update= "UPDATE Sectores SET Sectores='$sectores'";

$stmt= sqlsrv_query($conn, $update);

if($stmt){
    header("Location: ../../full/sectores.php");
}else{
    echo "MAL";
}





?>