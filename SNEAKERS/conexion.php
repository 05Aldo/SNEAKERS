<?php


$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sneakers";
    
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conexion)
{
    die("No hay conexión: ".mysqli_connect_error());
}

?>