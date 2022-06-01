<?php

    //Iniciamos Sesión en la web
    session_start();

    //Incluimos la conexión
    include('db.php');  

    //Guardamos los datos (email y password) del login intruducido
    $email=$_POST['correo'];
    $password=$_POST['contrasenya'];

    //Consulta para comprobrar si estan en la base de datos
    $sql = "SELECT Usuarios_Nombre, Usuarios_Email, Usuarios_Password FROM Usuarios WHERE Usuarios_Email='$email' and Usuarios_Password='$password'";
    $stmt = sqlsrv_query( $conn, $sql );

    //Condicion - recorrer todos los id's
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
 
        $usuario_correcto = $row['Usuarios_Email'];
         
        $palabra_secreta_correcta = $row['Usuarios_Password'];
         
        //Indicamos que si las variables concuerdan con los datos de la bd
        if($email === $usuario_correcto && $palabra_secreta_correcta === $password) {
            
            //Se inicia la sesión
            session_start();
            
            $_SESSION["correo"] = $usuario;


            //Inicia en el menu principal
            header("Location: MenuPrincipal.php");

        //Sino salta error
        }else {
            header("Location: error.php");
        }
    }
    



?>