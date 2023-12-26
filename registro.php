<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/styles.css"> 
</head>

<body>

<?php
// Incluye el archivo "conexion.php" donde se conecta con la base de datos
include("conexion.php");

// El servidor genera automáticamente un array asociativo cuyos índices van a estar determinados por el name de los inputs del formulario.
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];
$password= md5($_POST['password']);
// Mediante md5 encriptamos la contraseña

// Variable que contiene una consulta que inserta un nuevo registro en la tabla 'usuarios'.
$consulta = mysqli_query($conexion, "INSERT INTO usuarios VALUES(0,'$nombre','$mail','$password')");

// Estructura condicional: Si la consulta es exitosa, se redirige al usuario a la página "form_login.php" . Caso contrario, se imprime el mensaje "La consulta falló".
if ($consulta === true){
    header("Location:form_login.php");
} else {
    echo "La consulta falló";
}


?>	
    

</body>
</html>