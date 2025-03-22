<?php include 'includes/header.php'; ?>

<!-- Sección Hero -->
<section id="hero">
    <div class="container">
        <h1>
            Wyndham Grand <br> Mayakaan Residences <br> Riviera Maya
        </h1>
        <p>
            Nuevo modelo de negocio en la Riviera Maya, donde el lujo se fusiona con la naturaleza
        </p>
        <a href="#" class="btn">TOUR VIRTUAL</a>
    </div>
</section>



<!-- Sección Nosotros -->
<section id="nosotros" class="py-5">
    <div class="container">
        
        <!-- Imagen a la izquierda -->
        <div class="img-container">
            <img src="assets/images/Modelo-Piscina.jpg" alt="Wyndham Grand Mayakaan Residences">
        </div>

        <!-- Contenido de texto a la derecha -->
        <div class="text-container">
            <h3>WYNDHAM GRAND MAYAKAAN RESIDENCES</h3>
            <p>
                Es un desarrollo inmobiliario de alta gama, que preserva el ecosistema que lo rodea, donde las eco tecnologías de vanguardia convergen con nuestras lujosas residencias, con acabados de alta calidad, diseños y materiales mexicanos 100% artesanales, rodeadas de la exuberante selva de la Riviera Maya.
                Donde el lujo se encuentra con la naturaleza y los sentidos se conectan con el hábitat natural y a sólo 15 minutos del aeropuerto de Cancún.
            </p>
            <a href="#" class="btn btn-outline-light">Tour Virtual</a>
        </div>
    </div>
</section>




<!-- Sección Proyecto -->
<section id="proyecto" class="py-5">
    <div class="container text-center">

        <!-- Título del Proyecto -->
        <h2>PROYECTO</h2>
        
        <!-- Descripción debajo del título -->
        <p>
            Nuestros residentes podrán disfrutar de las más exclusivas amenidades y servicios.
        </p>
        
        <!-- Contenedor de imagen con texto superpuesto -->
        <div class="image-container">
            <img src="assets/images/mayakaan-Park.jpg" alt="Proyecto Mayakaan Park">
            
            <!-- Cuadro con el mensaje "MASTER PLAN" -->
            <div class="overlay-message">
                MASTER PLAN
            </div>
        </div>
    </div>
</section>



<!-- Sección Amenidades -->
<section id="amenidades" class="py-5">
    <div class="container">
        <!-- Título y descripción -->
        <div class="text-center mb-4">
            <h2 class="display-4">AMENIDADES</h2>
            <p class="mb-4">
                Disfrute de grandes experiencias en la Riviera Maya en medio de la selva, dentro del complejo residencial hotelero más exclusivo y privilegiado del Caribe mexicano.
            </p>
        </div>

        <!-- Cuadrícula de amenidades -->
        <div class="row">
            <!-- Columna 1 -->
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li> Amplias albercas</li>
                    <li> Lagoon beach</li>
                    <li> Beach club</li>
                    <li> Climbing wall</li>
                    <li> Área de yoga</li>
                    <li> Andadores</li>
                    <li> Mirador</li>
                </ul>
            </div>

            <!-- Columna 2 -->
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li> Bike station</li>
                    <li> Cenote natural</li>
                    <li> Tiro con arco</li>
                    <li> Área de bateo</li>
                    <li> Cancha de tenis</li>
                    <li> Tirolesa de 300mts</li>
                    <li> The fire pit</li>
                </ul>
            </div>

            <!-- Columna 3 -->
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li> Parque acuático para niños</li>
                    <li> Anfiteatro</li>
                    <li> Cine al aire libre</li>
                    <li> Zona de kayak</li>
                    <li> Club de padel board</li>
                    <li> Sistema de domótica</li>
                    <li> Centro de belleza</li>
                </ul>
            </div>

            <!-- Columna 4 -->
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li> Clínica médica</li>
                    <li> Gym</li>
                    <li> Restaurantes temáticos</li>
                    <li> Hall of games (+18)</li>
                    <li> Kids club</li>
                    <li> Estacionamiento</li>
                    <li> Seguridad 24/7 CCTV</li>
                </ul>
            </div>
        </div>
        
        <!-- Imágenes en cuadrícula -->
        <div class="row mt-4 gx-3 gy-3">
            <div class="col-md-6">
                <div class="image-container">
                    <img src="assets/images/Image1.jpg" alt="Image 1" class="img-fluid image-large">
                </div>
            </div>

            <div class="col-md-6">
                <div class="row gx-3 gy-3">
                    <div class="col-md-6 mb-3">
                        <div class="image-container">
                            <img src="assets/images/Image2.jpg" alt="Image 2" class="img-fluid image-small">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="image-container">
                            <img src="assets/images/Image3.jpg" alt="Image 3" class="img-fluid image-small">
                        </div>
                    </div>
                </div>
                <div class="row gx-3 gy-3">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="assets/images/Image4.jpg" alt="Image 4" class="img-fluid image-small">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="assets/images/Image5.jpg" alt="Image 5" class="img-fluid image-small">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botón centrado debajo de las imágenes -->
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary ver-galeria-btn">
                VER GALERIA
            </a>
        </div>

    </div>
</section>



<!-- Modal de Contacto -->
<div class="modal fade" id="contactModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            
            <!-- Encabezado del modal -->
            <div class="modal-header" style="border-bottom: none;">
                <h5 class="modal-title">DEJANOS UN MENSAJE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Cuerpo del modal -->
            <div class="modal-body">
                <form action="contact.php" method="POST">
                    <!-- Campo Nombre -->
                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
                    </div>

                    <!-- Campo Correo Electrónico -->
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@mail.com" required>
                    </div>

                    <!-- Campo Mensaje (ahora es un textarea) -->
                    <div class="mb-4">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escribe tu mensaje" required></textarea>
                    </div>

                    <!-- Botón Enviar -->
                    <div class="text-left">
                        <button type="submit" class="btn">ENVIAR MENSAJE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>