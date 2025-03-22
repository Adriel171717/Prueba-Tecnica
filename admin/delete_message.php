<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $conn->prepare("DELETE FROM mensajes WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        echo "Error al eliminar el mensaje: " . $e->getMessage();
    }
} else {
    header('Location: index.php');
    exit;
}
?>