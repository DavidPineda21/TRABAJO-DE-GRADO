<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="cssregistro.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Registro</title>
</head>
<body>
	<div class="contenedor">
	<header>
			<div class="logo">
				<h3 class="titulo">PARCHESE</h3>
			</div>
			<nav class="menu">
				<a href="#">Inicio</a>
				<a href="#">Registrarse</a>
				<a href="http://localhost/tdg2/InicioDeSesion.php">Iniciar Sesion</a>
			</nav>
		</header>
	 
			<section class="main">
				<div class="divis"><h3 class="titulo2">Registro</h3></div>
				<form class="formulario" action="Registro.php" method="post">
					<input type="text" placeholder="Identificacion" name="id" required>
					<input type="text" placeholder="Nombre" name="nombre" required>
					<input type="text" placeholder="Apellido" name="apellido" required>
					<div class="ced"><select class="form-select" aria-label="Default select example" id="tipoid" name="tipoid">
					    <option value="cc">Cedula de ciudadania</option>
					    <option value="ti">Tarjeta de identidad</option>
					  </select></div>
					  
					<div class="ced"><select class="form-select" aria-label="Default select example" id="sexo" name="sexo">
					    <option value="M">Masculino</option>
					    <option value="F">Femenino</option>
					  </select></div>
					  
					<input type="text" placeholder="Usuario" name="usuario" required>
					<input type="password" placeholder="Contraseña" name="pass" required>
					<div class="divboton"><input class="btn btn-warning" type="submit" value="Registrar" name="btnregistrar"></div>
				</form>
			</section>
		

	<?php 
	if(isset($_POST['btnregistrar']))
	{
	include("ConexionSQL.php");
	
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$tipoid=$_POST['tipoid'];
	$sexo=$_POST['sexo'];
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];

	$query="INSERT INTO usuarios (id,nombre,apellido,tipoid,sexo,usuario,pass)  VALUES('$id','$nombre', '$apellido', '$tipoid', '$sexo','$usuario','$pass')";
	$res=mysqli_prepare($conn,$query);
	$a=0;

	$validacion=mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario='$usuario'");

	while($resul=mysqli_fetch_array($validacion))
	{
			$a++;
			
	}
	
	if($a>0)
	{
		echo '<script>alert("EL USUARIO YA SE ENCUENTRA REGISTRADO")</script>';
	}
	else
	{
		if(mysqli_execute($res)){
		echo '<script>alert("DATOS INGRESADOS CORRECTAMENTE")</script>';
		
	}
	else{
		echo '<script>alert("ERROR")</script>';
	}
	}
	


}
	 ?>
	

</body>
</html>