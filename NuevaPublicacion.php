<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="cssnuvap.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Nueva Publicacion</title>
	
</head>
<body>
	 <div class="contenedor">
	 	<header>
			<div class="logo">
				<h3 class="titulo">PARCHESE</h3>
			</div>
			<nav class="menu">
				<a href="http://localhost/tdg2/lnicio.php">Inicio</a>
				<a href="#">Registrarse</a>
				<a href="http://localhost/tdg2/InicioDeSesion.php">Iniciar Sesion</a>
			</nav>
		</header>
			<section class="main">
				<div class="divis"><h3 class="titulo2">Nueva Publicacion</h3></div>
				<form class="formulario" action="NuevaPublicacion.php" method="post">
					<input type="text" placeholder="Titulo"  name="titulo" required>
					<input type="date" class="date" id="fecha" name="fecha" required>
					<input type="text" placeholder="Ubicación" name="ubicacion" required>
					<input type="text" placeholder="Boletería" name="boleteria" required>
					<div class="ced"><select class="form-select" aria-label="Default select example" id="categoria" name="categoria">
					    <option value="fiesta">Fiestas</option>
					    <option value="concierto">Conciertos</option>
					    <option value="comida">Comida</option>
					  </select></div>
					  
					  <input type="text" placeholder="Link imagen" name="imagen" required>
        				<div class="divboton"><input class="btn btn-warning" type="submit" value="Publicar" name="btnpublicar"></div>
				</form>
			</section>
		</div>

	<?php 
	if(isset($_POST['btnpublicar']))
	{
	include("ConexionSQL.php");
	$titulo=$_POST['titulo'];
	$ubicacion=$_POST['ubicacion'];
	$boleteria=$_POST['boleteria'];
	$categoria=$_POST['categoria'];
	$imagen=$_POST['imagen'];
	$fecha=$_POST['fecha'];


	$query="INSERT INTO publicaciones (usu,titulo,fecha,ubicacion,boleteria,categoria,imagen)  VALUES('123','$titulo', '$fecha', '$ubicacion', '$boleteria','$categoria','$imagen')";
	$res=mysqli_prepare($conn,$query);
	

		if(mysqli_execute($res)){
		echo '<script>alert("DATOS INGRESADOS CORRECTAMENTE")</script>';
	}
	else{
		echo '<script>alert("ERROR")</script>';
	}
	
	


}
	 ?>
	

</body>
</html>