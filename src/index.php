<?php
$servername = "db";
$username = "usuario";
$password = "password";
$dbname = "hola_mundo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "<h1>Hola Mundo desde PHP + MySQL</h1>";

$result = $conn->query("SELECT '¡Conexión exitosa!' AS mensaje");
$row = $result->fetch_assoc();
echo "<p>".$row['mensaje']."</p>";

$conn->close();
?>
