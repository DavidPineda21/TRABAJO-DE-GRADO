<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="cssperfil.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Perfil</title>
</head>
<body>
	<div class="contenedor">
	<header>
			<div class="logo">
				<h3 class="titulo">PARCHESE</h3>
			</div>
			<nav class="menu">
				<a href="http://localhost/tdg2/lnicio.php">Inicio</a>
				<a href="http://localhost/tdg2/NuevaPublicacion.php">Nueva Publicacion</a>
				<a href="http://localhost/tdg2/Perfil.php">Perfil</a>
			</nav>
		</header>
	 
			<section class="main">
				<div class="divis"><h3 class="titulo2">Perfil</h3></div>
				<form class="formulario" action="Registro.php" method="post">
					
					<input type="text" placeholder="David" name="nombre" required disabled>
					<input type="text" placeholder="Pineda" name="apellido" required disabled>
					<input type="text" placeholder="Cedula de ciudadania" name="tipoid" required disabled>
					  
					<input type="text" placeholder="12345" name="apellido" required disabled>
					 <a href="http://localhost/tdg2/InicioDeSesion.php"><div class="divboton"><input class="btn btn-warning" type="button" value="Cerrar Sesion" name="btnpublicar"></div></a> 
					
					
					
				</form>
			</section>
</body>
</html>