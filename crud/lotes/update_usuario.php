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

$update= "UPDATE Usuarios SET Usuarios_Nombre='$usuarios_nombre', Usuarios_Email='$usuarios_email', Roles_ID='$roles_id', 
Usuarios_Fecha_inicio='$usuarios_fecha_inicio', Usuarios_Fecha_fin='$usuarios_fecha_fin', Usuarios_Password='$usuarios_password',
Usuarios_Activo='$usuarios_activo', Usuarios_Activar_Usuario='$usuarios_activar_usuario'";

$stmt= sqlsrv_query($conn, $update);

if($stmt){
    header("Location: ../../full/usuarios.php");
}else{
    echo "MAL";
}





?>