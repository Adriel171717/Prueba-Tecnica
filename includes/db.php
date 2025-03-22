<?php
$host = 'localhost';      // Servidor de la base de datos
$dbname = 'prueba_tecnica'; // Nombre de la base de datos
$user = 'root';           // Usuario de MySQL (por defecto en Laragon es 'root')
$pass = '';               // Contraseña de MySQL (en mi caso vacía)

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>