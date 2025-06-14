<?php
session_start(); // Iniciar sesión para recordar al usuario

include 'conexion.php'; // Archivo de conexión con la base de datos

/* Recoger datos del formulario */
$correo = $_POST['correo'];
$password = $_POST['password'];

/* Verificar conexión */
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

/* Consulta para verificar usuario */
$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password'";
$resultado = mysqli_query($conexion, $sql);

/* Validación */
if (mysqli_num_rows($resultado) > 0) {
    $_SESSION['correo'] = $correo; // Guardar usuario en sesión
    header("Location: ../catalogo/catalogo.html"); // Redirigir a la página principal
    exit();
} else {
    echo "<script>alert('Usuario o DNI incorrecto'); window.location.href='../index.html';</script>";
}

mysqli_close($conexion);
?>