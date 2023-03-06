<?php

$servername = "localhost";
$username = "agustin";
$password = "Ireliagod1!";
$dbname = "apirest";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

?>
