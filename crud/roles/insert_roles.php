<?php

include("../../db.php");

$roles_descripcion=$_POST['roles_descripcion'];
$roles_activo=$_POST['roles_activo'];


$sql="INSERT INTO Roles VALUES ('$roles_descripcion', '$roles_activo')";

$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/roles.php");
}





?>