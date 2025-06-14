<?php
$host="localhost";
$usuario="root";
$password="";
$base="bibliotecacorta";

$conexion=mysqli_connect($host,$usuario,$password,$base);
if (!$conexion)
{
	die("fallo en la conexion ala base de datos...");
}
?>