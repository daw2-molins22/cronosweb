<?php

include("../../db.php");

$roles_descripcion=$_POST['roles_descripcion'];
$roles_activo=$_POST['roles_activo'];

$sql="UPDATE Roles SET Roles_Descripcion='$roles_descripcion', Roles_Activo='$roles_activo'";
$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/roles.php");
}





?>