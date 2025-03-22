<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include '../includes/db.php'; // Conexión a la base de datos
include 'header.php'; // Encabezado de la pagina
?>

<!-- Contenido del panel de administración -->
<div class="container mt-5 col-md-8">

    <!-- Sección de Mensajes Nuevos -->
     
    <div class="title1">
        <h3 class="mb-3">MENSAJES NUEVOS</h3>
    </div>

    <div class="row">
        <?php
        try {
            $stmt = $conn->query("SELECT * FROM mensajes WHERE leido = 0 ORDER BY fecha_envio DESC");
            $mensajesNuevos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($mensajesNuevos as $mensaje): ?>
                <div class="col-md-12 mb-1">
                    <div class="card">
                        <div class="card-body">

                            <!-- Mensaje y acciones -->
                            <div class="row">

                                <!-- Columna 1: Nombre, correo, ícono y mensaje -->
                                <div class="col-md-11">

                                    <!-- Nombre y correo -->
                                    <h5 class="card-title"><?php echo htmlspecialchars($mensaje['nombre']); ?></h5>
                                    <h6 class="card-subtitle">(<?php echo htmlspecialchars($mensaje['email']); ?>)</h6>

                                    <!-- Ícono y mensaje -->
                                    <div class="message-content d-flex align-items-center">
                                        <i class="bi bi-chat-left"></i>
                                        <p class="card-text mb-0"><?php echo htmlspecialchars($mensaje['mensaje']); ?></p>
                                    </div>
                                </div>

                                <!-- Columna 2: Acciones -->
                                <div class="col-md-1 d-flex justify-content-end align-items-center">
                                    <div class="message-actions">
                                        <a href="mark_as_read.php?id=<?php echo $mensaje['id']; ?>" class="btn-outline-success">
                                            <i class="bi bi-envelope-check"></i>
                                        </a>
                                        <a href="#" class="btn-outline-danger delete-message" data-id="<?php echo $mensaje['id']; ?>">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                        <!-- Antigua Forma de confirmacion
                                        <a href="delete_message.php?id=<//?php echo $mensaje['id']; ?>" class="btn-outline-danger" onclick="return confirm('¿Estás seguro de eliminar este mensaje?')">
                                            <i class="bi bi-trash3"></i>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
        } catch (PDOException $e) {
            echo "Error al obtener los mensajes nuevos: " . $e->getMessage();
        }
        ?>
    </div>

    <!-- Sección de "Todos los Mensajes" -->
    <div class="col-md-12 border-top my-3 linea"></div>

    <div class="title2">
        <h3 class="mb-3">TODOS LOS MENSAJES</h3>
    </div>

    <div class="row">
        <?php
        try {
            $stmt = $conn->query("SELECT * FROM mensajes WHERE leido = 1 ORDER BY fecha_envio DESC");
            $todosLosMensajes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($todosLosMensajes as $mensaje): ?>
                <div class="col-md-12 mb-1">
                    <div class="card">
                        <div class="card-body">

                            <!-- Mensaje y acciones -->
                            <div class="row">

                                <!-- Columna 1: Nombre, correo, ícono y mensaje -->
                                <div class="col-md-10">

                                    <!-- Nombre y correo -->
                                    <h5 class="card-title"><?php echo htmlspecialchars($mensaje['nombre']); ?></h5>
                                    <h6 class="card-subtitle">(<?php echo htmlspecialchars($mensaje['email']); ?>)</h6>

                                    <!-- Ícono y mensaje -->
                                    <div class="message-content d-flex align-items-center">
                                        <i class="bi bi-chat-left"></i>
                                        <p class="card-text mb-0"><?php echo htmlspecialchars($mensaje['mensaje']); ?></p>
                                    </div>
                                </div>

                                <!-- Columna 2: Acciones -->
                                <div class="col-md-2 d-flex justify-content-center align-items-center">
                                    <div class="message-actions">
                                        <a href="#" class="btn-outline-danger delete-message" data-id="<?php echo $mensaje['id']; ?>">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
        } catch (PDOException $e) {
            echo "Error al obtener todos los mensajes: " . $e->getMessage();
        }
        ?>
    </div>
</div>

<!-- Modal de confirmación ELIMINAR MENSAJE-->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este mensaje?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a id="confirmDeleteButton" href="#" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>

<!-- Scrip para la eliminacion del mensaje  -->
<script>
    // Selecciona todos los botones de eliminar
    document.querySelectorAll('.delete-message').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault(); // Evita que el enlace se ejecute directamente

            // Obtén el ID del mensaje desde el atributo data-id
            const messageId = this.getAttribute('data-id');

            // Actualiza el enlace de eliminación en el modal
            const confirmDeleteButton = document.getElementById('confirmDeleteButton');
            confirmDeleteButton.href = `delete_message.php?id=${messageId}`;

            // Muestra el modal
            const confirmDeleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
            confirmDeleteModal.show();
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>