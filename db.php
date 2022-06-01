<?php
    
    //Conexion Base de datos SQL Server
    $serverName = "cronosdb.database.windows.net";
    $connectionInfo = array("Database"=>"CronosOficial", "UID"=>"cronos", "PWD"=>"SqlAzureMolins381///","CharacterSet" => "UTF-8", 'ReturnDatesAsStrings'=>true);
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

?>