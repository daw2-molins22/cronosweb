<?php

include("../../db.php");

$usuarios_nombre=$_POST['usuarios_nombre'];
$usuarios_email=$_POST['usuarios_email'];
$roles_id=$_POST['roles_id'];
$usuarios_fecha_inicio=$_POST['usuarios_fecha_inicio'];
$usuarios_fecha_fin=$_POST['usuarios_fecha_fin'];
$usuarios_password=$_POST['usuarios_password'];
$usuarios_activo=$_POST['usuarios_activo'];
$usuarios_activar_usuario=$_POST['usuarios_activar_usuario'];

$sql="INSERT INTO Usuarios VALUES ('$usuarios_nombre', '$usuarios_email', '$roles_id', '$usuarios_fecha_inicio', '$usuarios_fecha_fin', '$usuarios_password',
'$usuarios_activo', '$usuarios_activar_usuario')";

$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/usuarios.php");
}





?>