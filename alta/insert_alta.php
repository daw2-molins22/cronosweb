<?php

include("../db.php");

$today = date('d-m-Y', time());

$sql = "INSERT INTO Usuarios (Usuarios_Nombre, Usuarios_Email, Roles_ID, Usuarios_Fecha_inicio, 
Usuarios_Fecha_fin, Usuarios_Password, Usuarios_Activo, Usuarios_Activar_usuario)
        VALUES ( 
            '".$_POST['usuarios_nombre']."', 
            '".$_POST['usuarios_email']."', 
            '".NULL."', 
            '".$today."', 
            '".NULL."', 
            '".$_POST['usuarios_password']."',
            '".NULL."',  
            '".NULL."' ) ".
            "SELECT SCOPE_IDENTITY()";

$query= sqlsrv_query($conn, $sql);

if($query){

    header("Location: ../index.html");
}





?>