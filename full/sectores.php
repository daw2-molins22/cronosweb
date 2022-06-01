<?php

include("../db.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sectores</title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>

	<!-- Barra - Usuario -->
		<div class="barralogin">
			<!-- Titulo -->
			<div class="apartado">
				<h3>Cronos</h3>
			</div>

			<!-- Usuario -->
			<div class="usuariobarra">
				<img src="../imagenes/usuario.png" alt="usuario">
				<p>Usuario</p>
			</div>

		</div>

		<div class="pagina">

			<div class="menuleft">
				<!-- Contenido del menu -->
				<div class="contenido">
					<a href="../MenuPrincipal.html"><i class="fas fa-home"></i></a>

					<a class="bar" href="#"><i class="fas fa-bars"></i></a>
				</div>
			</div>

			<div class="principalright">

                <div class="content col-12 p-1">
                    <div id="user_area">
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Sectores Registrados</h5>
                                <!--<button type="button" class="btn bg-orange" id="button_nuevo_usuario"><i class="icon-floppy-disk "></i> Nuevo</button>-->
                                <a href="../crud/sectores/nuevo_sectores.php">
                                    <button type="button" class="btn bg-orange" id="button_nuevo_usuario"><i class="icon-floppy-disk "></i> Nuevo</button>
                                </a>
                                

                                <div class="card-body" id="tipos_de_hora">
                                    <div class="col-12">
                                                                
                                        <div id="mostrar_tipos_hora">
                                            <div class="dataTables_wrapper no-footer" id="tabla_tipos_hora" name="tabla_tipos_hora"> 
                                                <table id="datatable_lista" style="font-size: .8125rem;" class="table table-hover dataTable no-footer dtr-column" role="grid">
                                                                                                
                                                    <thead>
                                                        <tr role="row">
                                                            <th>ID</th>
                                                            <th>Sectores</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <?php

                                                        echo '<tr>';
                                                            echo '<td>';

                                                            $conn = sqlsrv_connect($serverName, $connectionInfo);

                                                            $sql = "SELECT Sectores_ID, Sectores
                                                            FROM Sectores";

                                                            $stmt = sqlsrv_query( $conn, $sql );
                                                            if( $stmt === false) { die( print_r( sqlsrv_errors(), true) ); }
                                                            
                                                            while($row=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
                                                                echo '<tr>';
                                                                echo '<td>'.$row['Sectores_ID'].'</td>';
                                                                echo '<td>'.$row['Sectores'].'</td>';
                                                                ?>

                                                                <td><a href="../crud/sectores/actualizar_sectores.php?id=<?php echo $row['Sectores_ID'] ?>" class="btn btn-info">Editar</a></td>
                                                                <td><a href="../crud/sectores/delete_sectores.php?id=<?php echo $row['Sectores_ID'] ?>" class="btn btn-danger">Eliminar</a></td>

                                                                <?php

                                                                echo '</tr>';           
                                                            }

                                                            echo '</td>';
                                                        echo '</tr>';

                                                        ?>

                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    


                </div> <!-- DIV Pagina Principal Derecha --> 

            </div> <!-- DIV Pagina Total -->


<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script> <!-- Libreria FontAwesome -->	


</body>
</html>