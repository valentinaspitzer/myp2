<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="./css/styles.css">
</head>

<body>
<div>
	<?php
	// El servidor genera automáticamente un array asociativo cuyos índices van a estar determinados por el name de los inputs del formulario.
	$mail=$_POST['mail']; 
	$password= md5($_POST['password']);

	// Incluye el archivo "conexion.php" donde se conecta con la base de datos
	include("conexion.php");

	// Crea la variable $consulta que devuelve registros que coincidan con los siguientes parámetros...
	$consulta = mysqli_query($conexion, "SELECT nombre, mail FROM usuarios WHERE mail='$mail' AND password='$password'");

	// Devuelve la cantidad de filas del resultado de la consulta.
	$resultado = mysqli_num_rows($consulta);

	// Estructura condicional: si se encontraron resultados, se redirige a la página "you.html", si no se encuentran se muestra un mensaje de error y se incluye el formulario de registro desde el archivo "form_registro.php".
	if($resultado != 0){
		$respuesta=mysqli_fetch_array($consulta);
			header("Location:you.html");	
	} else {
		echo "<p class=error> No es un usuario registrado</p>";
		include("form_registro.php");
	}
	?>
</div>
</body>
<style>
	.contenedor_formulario{
		width: 100%;
		display: flex;
		justify-content: center;
		margin-bottom: 200px;
	}

	.error{
		font-family: 'outfit', sans-serif;
		display: flex;
		justify-content: center;
	}
</style>
</html>

