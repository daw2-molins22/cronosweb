<?php

include("../../db.php");

if( $conn ) {

    if(isset($_GET['id'])) {
        $sql = "DELETE FROM Clientes WHERE Cliente_ID = ".$_GET['id'].";";
        $result = sqlsrv_query($conn,$sql);
        if( $result === false ) {
             die( print_r( sqlsrv_errors(), true));
        }
        
        sqlsrv_close( $conn );
        header("Location: ../../full/clientes.php");

    }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r( sqlsrv_errors(), true));
    }

}



?>