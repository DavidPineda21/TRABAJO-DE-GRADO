<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="csssesion.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Inicio de sesion</title>
</head>
<body>
	<div class="contenedor">
	<header>
			<div class="logo">
				<h3 class="titulo">PARCHESE</h3>
			</div>
			<nav class="menu">
				<a href="#">Inicio</a>
				<a href="http://localhost/tdg2/Registro.php">Registrarse</a>
				<a href="#">Iniciar Sesion</a>
			</nav>
		</header>
	 <section class="main">
	 	<div class="divis"><h3 class="titulo2">Inicio de sesion</h3></div>
	 	
				<form class="formulario" action="InicioDeSesion.php" method="post">
					<input type="text" placeholder="Usuario" name="usuario" required>
					<input type="password" placeholder="Contraseña" name="pass" required>
					<div class="divboton"><input class="btn btn-warning" type="submit" value="Iniciar sesion" name="btniniciarsesion"></div>
					
				</form>
				
			</section>
			
				
			
		</div>


	<?php 
	if(isset($_POST['btniniciarsesion']))
	{
	include("ConexionSQL.php");
	
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];


	

	$b=0;
	$k=0;

	$valinicio=mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'");

	

	while($resul=mysqli_fetch_array($valinicio))
	{
			echo "$resul[nombre]";

			$b++;
	}
	
	if($b>0)
	{
		echo '<script>alert("SESION INICIADA")</script>';
		header("Location: http://localhost/tdg2/Inicio.php");
		$k++;


	}
	else
	{
		echo '<script>alert("USUARIO O CONTRASEÑA INCORRECTOS")</script>';
	}
	if($k=1)
	{
	//header("Location: http://localhost/tdg2/ConexionSQL.php");
exit();
}
}
	 ?>
	
</div>
</body>
</html>