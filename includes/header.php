<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Técnica</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] === 'success') {
            echo '
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var toastEl = document.getElementById("successToast");
                    var toast = new bootstrap.Toast(toastEl, { delay: 3000 }); 
                    toast.show();
                });
            </script>
            ';
        } elseif ($_GET['status'] === 'error') {
            echo '<div class="alert alert-danger text-center">Hubo un error al enviar el mensaje.</div>';
        }
    }
    ?>

    <!-- Toast para mostrar mensajes -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="successToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <strong class="me-auto">Éxito</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                ¡Mensaje enviado con éxito!
            </div>
        </div>
    </div>

    <!-- Header index principal -->
    <header class="py-4" id="header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logo, línea vertical y navegación -->
                <div class="d-flex align-items-center">
                    <img src="assets/images/logoMaya.png" alt="Logo Maya" class="logo">

                    <!-- Línea vertical simulada -->
                    <div class="vertical-line"></div>

                    <!-- Enlaces de navegación en fila horizontal -->
                    <ul class="navbar-nav d-flex flex-row align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#proyecto">Proyecto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#amenidades">Amenidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#residencias">Residencias</a>
                        </li>
                    </ul>
                </div>

                <!-- Botón de Contáctanos -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">
                    CONTACTANOS
                </button>
            </div>
        </div>
    </header>

    <!-- Script para el scroll del header -->
    <script>
        const header = document.getElementById("header");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });

    </script>






