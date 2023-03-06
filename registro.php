<?php

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$dni = $_GET["dni"];
$email = $_GET["email"];
$contrasena = $_GET["password"];

require(conexion.php);

$sql = "INSERT INTO usuarios (nombre, apellido, dni, email, contrasena) VALUES ('$nombre', '$apellido', '$dni', '$email', '$contrasena')";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Error al preparar la consulta: " . mysqli_error($conn));
}

if (mysqli_stmt_execute($stmt)) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar el usuario: " . mysqli_error($conn);
}


mysqli_close($conn);

?>