<?php

include("../../db.php");

if( $conn ) {

    if(isset($_GET['id'])) {
        $sql = "DELETE FROM Areas_de_Negocio WHERE Areas_de_Negocio_ID = ".$_GET['id'].";";
        $result = sqlsrv_query($conn,$sql);
        if( $result === false ) {
             die( print_r( sqlsrv_errors(), true));
        }
        
        sqlsrv_close( $conn );
        header("Location: ../../full/areas_de_negocio.php");

    }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r( sqlsrv_errors(), true));
    }

}



?>