<?php

include("../../db.php");

$cliente_nombre=$_POST['cliente_nombre'];
$sectores_id=$_POST['sectores_id'];
$tipos_clientes_id=$_POST['tipos_clientes_id'];
$cliente_direccion=$_POST['cliente_direccion'];
$cliente_codigo_postal=$_POST['cliente_codigo_postal'];
$cliente_fecha_visita=$_POST['cliente_fecha_visita'];
$cliente_fax=$_POST['cliente_fax'];
$cliente_telefono=$_POST['cliente_telefono'];
$cliente_activo=$_POST['cliente_activo'];

$update= "UPDATE Clientes SET Cliente_Nombre='$cliente_nombre', Sectores_ID='$sectores_id', Tipos_clientes_ID='$tipos_clientes_id', Cliente_Direccion='$cliente_direccion',
Cliente_Codigo_Postal='$cliente_codigo_postal', Cliente_Fecha_visita='$cliente_fecha_visita', Cliente_Fax='$cliente_fax', Cliente_Telefono='$cliente_telefono', Cliente_Activo='$cliente_activo'";

$stmt= sqlsrv_query($conn, $update);

if($stmt){
    header("Location: ../../full/clientes.php");
}else{
    echo "MAL";
}





?>