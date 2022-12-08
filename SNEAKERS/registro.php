<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

$nombre=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$consulta="INSERT INTO `usuarios` (`nombres`, `apellidos`, `correo`, `contraseña`)
VALUES ('$nombre', '$apellido', '$correo', '$contraseña');";

$resultado=mysqli_query($conexion,$consulta)or die("Error de registro");

echo "Registro exitoso";

mysqli_close($conexion);
?>