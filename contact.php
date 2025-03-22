<?php
// Incluir la conexión a la base de datos
include 'includes/db.php';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Validar los datos
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Insertar los datos en la base de datos
    try {
        $stmt = $conn->prepare("INSERT INTO mensajes (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensaje', $mensaje);
        $stmt->execute();

        // Redirigir al usuario con un mensaje de éxito
        header('Location: index.php?status=success');
        exit;
    } catch (PDOException $e) {
        echo "Error al guardar el mensaje: " . $e->getMessage();
    }
} else {
    // Si no se envió el formulario, redirigir al inicio
    header('Location: index.php');
    exit;
}
?>