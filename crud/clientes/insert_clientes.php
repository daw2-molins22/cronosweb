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



$sql="INSERT INTO Clientes VALUES ('$cliente_nombre', '$sectores_id', '$tipos_clientes_id', '$cliente_direccion', 
'$cliente_codigo_postal', '$cliente_fecha_visita','$cliente_fax', '$cliente_telefono', '$cliente_activo')";

$query= sqlsrv_query($conn, $sql);

if($query){
    header("Location: ../../full/clientes.php");
}





?>