<?php
$servername = "10.0.0.5"; // Cambia esto a la IP de tu servidor MySQL
$username = "lia"; // Cambia esto al nombre de usuario de tu base de datos
$password = "123";
$dbname = "appcbdsolutions"; // Cambia esto al nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexion" . $conn->connect_error);
}
echo "Conexion exitosa";
?>
