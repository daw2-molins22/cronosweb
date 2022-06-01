<?php

include ("db.php");

// start a session
session_start()


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alpha - Menú Principal - Optima</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

	<!-- Barra Dashboard -->
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-md">
		  <a class="navbar-brand" href="#">
			  <img src="imagenes/ejemplo.png" alt="3">
		  </a>
		</div>
		<div class="usuariobarra">
			<img src="imagenes/usuario.png" alt="usuario">
			<span><?php echo $_SESSION["correo"]; ?></span>
		</div>
	  </nav>
		

		<div class="pagina">

			<div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
				<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
				  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
				  <span class="fs-4">Menu</span>
				</a>
				<hr>
				<ul class="nav nav-pills flex-column mb-auto">
				  <li class="nav-item">
					<a href="#" class="nav-link active" aria-current="page">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#home"></use></svg>
					  Home
					</a>
				  </li>

				  <li>
					<a href="full/areas_de_negocio.php" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#speedometer2"></use></svg>
					  Areas De Negocio
					</a>
				  </li>

				  <li>
					<a href="full/avales.php" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#speedometer2"></use></svg>
					  Avales
					</a>
				  </li>

				  <li>
					<a href="full/clientes.php" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#speedometer2"></use></svg>
					  Clientes
					</a>
				  </li>

				  <li>
					<a href="#" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#speedometer2"></use></svg>
					  Proyectos
					</a>
				  </li>

				  <li>
					<a href="full/provincias.php" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#grid"></use></svg>
					  Provincias
					</a>
				  </li>

				  <li>
					<a href="full/empresas.php" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#grid"></use></svg>
					  Empresas
					</a>
				  </li>

				  <li>
					<a href="full/sectores.php" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#grid"></use></svg>
					  Sectores
					</a>
				  </li>

				  <li>
					<a href="full/tipos_clientes.php" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#grid"></use></svg>
					  Tipo De Clientes
					</a>
				  </li>

				  <li>
					<a href="full/usuarios.php" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#table"></use></svg>
					  Usuarios
					</a>
				  </li>

				  <li>
					<a href="full/roles.php" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#grid"></use></svg>
					  Roles
					</a>
				  </li>

				  <li>
					<a href="#" class="nav-link link-dark">
					  <svg class="bi me-2" width="15" height="15"><use xlink:href="#people-circle"></use></svg>
					  Empresas
					</a>
				  </li>
				</ul>
				<hr>

			  </div>

			<div class="principalright">

				<h4>Página principal</h4>

				<div class="opciones">

					<div class="fila1">

						<div class="doble1">
							<button type="button" class="btn btn-light"><img src="imagenes/lista.png" alt="lista">Detalles Proyecto</button>
							<button type="button" class="btn btn-light"><img src="imagenes/lista.png" alt="lista">Seguimiento Proyecto</button>

						</div>
					
						
						<div class="cap1">
							
							<button type="button" class="btn btn-light"><img src="imagenes/peligro.png" alt="peligro">Alertas licitaciones</button>
						</div>

						<div class="cap1">
							
							<button type="button" class="btn btn-light"><img src="imagenes/archivos.png" alt="">Seguimiento Contratación</button>
							
						</div>

						<div class="especial1">
							<button type="button" class="btn btn-light"><img src="imagenes/el-tiempo-es-dinero.png" alt="">PMPP</button>
						</div>
						
						
					</div>

					<div class="fila2">

						<div class="cap1">
							<button type="button" class="btn btn-light"><img src="imagenes/departamento.png" alt="">Modelos departamento</button>
						</div>

						<div class="cap1">
							<button type="button" class="btn btn-light"><img src="imagenes/reclutamiento.png" alt="">Clasificaciones grupo</button>
						</div>

						<div class="cap1">
							<button type="button" class="btn btn-light"><img src="imagenes/gestion-de-carpetas.png" alt=""> Gestión de avales</button>
						</div>
						
						<div class="cap1">
							<button type="button" class="btn btn-light"><img src="imagenes/objetivo.png" alt="">Ratio de éxito</button>
						</div>
					

					</div>
					
				</div>


				<div class="alertas">

					<button type="button" class="btn btn-danger btn-lg">Apertura criterios subjetivos</button>

					<button type="button" class="btn btn-danger btn-lg">Apertura criterios automáticos</button>

					<button type="button" class="btn btn-danger btn-lg" style="text-align: center;">Próximas visitas</button>

					<button type="button" class="btn btn-danger btn-lg">Alertas pendientes de revisión</button>

					<button type="button" class="btn btn-danger btn-lg">Proyectos falta de delegación</button>
				
				</div> 

			</div> <!-- DIV Pagina Principal Derecha --> 

		</div> <!-- DIV Pagina Total -->


<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script> <!-- Libreria FontAwesome -->	
</body>
</html>