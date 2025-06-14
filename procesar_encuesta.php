<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "bibliotecacorta");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario_id = $_SESSION['usuario_id']; 

foreach ($_POST as $pregunta => $respuesta) {
    $sql = "INSERT INTO respuestas (usuario_id, pregunta, respuesta) VALUES ('$usuario_id', '$pregunta', '$respuesta')";
    $conexion->query($sql);
}

echo "Encuesta enviada correctamente.";
$conexion->close();
?>