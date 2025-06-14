<?php

$host = "localhost"; 
$usuario = "root"; 
$password = ""; 
$base = "bibliotecacorta"; 
$conn = new mysqli($host, $usuario, $password, $base);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$correo = $_POST['correo'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$domicilio = $_POST['domicilio'];
$provincia = $_POST['provincia'];
$poblacion = $_POST['poblacion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

$sql = "INSERT INTO usuarios ( correo,password,nombre, apellidos, dni, domicilio, provincia ,poblacion, fecha_nacimiento) 
        VALUES ('$correo','$password','$nombre', '$apellidos', '$dni', '$domicilio', '$provincia','$poblacion', '$fecha_nacimiento')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registro exitoso'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>