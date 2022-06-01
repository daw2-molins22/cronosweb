<?php

include("../../db.php");

$empresa=$_POST['empresa'];


$update= "UPDATE Empresas SET Empresa='$empresa'";

$stmt= sqlsrv_query($conn, $update);

if($stmt){
    header("Location: ../../full/empresas.php");
}else{
    echo "MAL";
}





?>