<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header del panel de administración -->
    <header class="py-4" style="background-color: #264a5e;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">

                <!-- Logo y texto con borde vertical simulando línea -->
                <div class="d-flex align-items-center">
                    <img src="../assets/images/logoMaya.png" alt="Logo Maya" style="height: 50px;">
                    
                    <!-- Simulación de la línea vertical -->
                    <div class="mx-3 border-vertical"></div>
                    
                    <!-- Palabra DASHBOARD -->
                    <span class="DASHBOARD">
                        DASHBOARD
                    </span>
                </div>

                <!-- Botón de Cerrar Sesión -->
                <a href="logout.php" class="btn btn-outline-light buton-logout">
                    CERRAR SESIÓN
                </a>
            </div>
        </div>
    </header>