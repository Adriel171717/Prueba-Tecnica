<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $conn->prepare("UPDATE mensajes SET leido = 1 WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        echo "Error al marcar como leído: " . $e->getMessage();
    }
} else {
    header('Location: index.php');
    exit;
}
?>