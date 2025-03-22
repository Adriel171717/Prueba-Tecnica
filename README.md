# Página de Lanzamiento con Formulario de Contacto

Este proyecto es una página de lanzamiento (landing page) desarrollada en **PHP puro** que permite a los usuarios enviar comentarios o mensajes a través de un formulario de contacto. Los mensajes se almacenan en una base de datos de MySQL y se gestionan por medio de una interfaz de administración que permite marcarlos como "leídos" y posteriormente eliminarlos.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalado lo siguiente en tu sistema:

- [Laragon](https://laragon.org/) (o cualquier entorno de desarrollo local que soporte PHP y MySQL).
- [PHP](https://www.php.net/) (v7.4 o superior).
- [MySQL](https://www.mysql.com/) o [MariaDB](https://mariadb.org/).

## Instalación

Sigue estos pasos para instalar y configurar el proyecto en tu máquina local:

1. **Clona el repositorio:**

   https://github.com/Adriel171717/Prueba-Tecnica.git

2. **Configura la base de datos:**

  - Abre Laragon y asegúrate de que los servicios de Apache y MySQL estén activos.
  - Abre la base de datos de Laragon y crea una base de datos nueva llamada prueba_tecnica.
  - Importa el archivo database.sql en la base de datos prueba_tecnica para crear las tablas necesarias (administradores y mensajes).

3. **Configura la conexión a la base de datos:**

    Abre el archivo includes/db.php y asegúrate de que los datos de conexión coincidan con tu configuración de Laragon:

```
    $host = 'localhost';........// Servidor de la base de datos
    $dbname = 'prueba_tecnica';.// Nombre de la base de datos
    $user = 'root';.............// Usuario de MySQL (por defecto en Laragon es 'root')
    $pass = '';................// Contraseña de MySQL (en Laragon, por defecto está vacía)
```

4. **Coloca el proyecto en la carpeta de Laragon:**

    Mueve la carpeta del proyecto a la carpeta www de Laragon (por ejemplo, C:\laragon\www\tu-repositorio).

5. **Accede al proyecto:**

    Abre tu navegador y visita http://tu-repositorio.test (o el nombre que hayas configurado en Laragon por defecto http://localhost/prueba-tecnica/index.php).

# Estructura del Proyecto

Aquí hay una breve descripción de la estructura del proyecto:

```
tu-repositorio/  
├── admin/..................# Archivos de la interfaz de administración  
│   ├── delete_message.php..# Eliminar mensajes  
│   ├── header.php..........# Cabecera de la interfaz de administración  
│   ├── index.php...........# Lista de mensajes  
│   ├── login.php...........# Página de inicio de sesión  
│   ├── logout.php..........# Cerrar sesión  
│   ├── mark_as_read.php....# Marcar mensajes como leídos  
│   └── styles.css..........# Estilos de la interfaz de administración  
├── assets/.................# Archivos estáticos (CSS, imágenes, JS)  
├── includes/...............# Archivos incluidos (conexión a la base de datos, etc.)  
│   ├── db.php..............# Conexión a la base de datos  
│   ├── footer.php..........# Pie de página  
│   ├── header.php..........# Cabecera de la página de lanzamiento  
│   └── contact.php.........# Procesamiento del formulario de contacto  
├── database.sql............# Script de la base de datos  
├── index.php...............# Página de lanzamiento (landing page)  
└── README.md...............# Este archivo  
```

# Gestión de contraseñas de administradores

Las contraseñas de los administradores están protegidas mediante el uso de hashing para garantizar la seguridad. En lugar de almacenar contraseñas en texto plano en la base de datos, se utiliza un hash generado por PHP, lo que añade una capa adicional en la protección.

Para generar y reemplazar una contraseña segura, se tiene que crear un archivo PHP temporal puedes llamarlo temporal.php que te permitirá hashear la contraseña antes de almacenarla en la base de datos.

## Pasos para generar y usar el hash de la contraseña:

1. **Crea el archivo temporal.php:**

```
    <?php
    $password = 'tu_contraseña_aquí'; // Reemplaza con la contraseña que deseas hashear
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    echo "El hash de la contraseña es: " . $hashed_password;
    ?>
```

2. **Ejecuta el archivo temporal:**

    Sube el archivo a tu servidor o ejecútalo localmente desde tu entorno PHP. Esto generará un hash seguro de la contraseña que puedes utilizar en tu base de datos.
    Ejemplo: http://localhost/prueba-tecnica/temporarl.php

3. **Reemplaza la contraseña en la base de datos:**

    Una vez generado el hash, reemplaza la contraseña en tu base de datos con el hash generado. Asegúrate de no almacenar la contraseña en texto plano o el programa fallara.

4. **Elimina el archivo temporal.php:**

    Después de obtener el hash y haber almacenado la contraseña correctamente, elimina el archivo temporal.php para evitar que quede expuesto.

# Uso

**Página de Lanzamiento**

    La página de lanzamiento incluye un header, una sección Hero, una sección Proyecto, una sección Amenidades y un footer.

    El formulario de contacto se encuentra en un modal que se activa al hacer clic en el botón "Contáctenos" en el menú principal.

**Interfaz de Administración**

    Accede a la interfaz de administración en http://tu-repositorio.test/admin/index.php.

    Inicia sesión con las credenciales proporcionadas (configuradas en la tabla administradores).

    Desde la interfaz de administración, puedes:

        Ver la lista de mensajes.

        Marcar mensajes como "Leídos".

        Eliminar mensajes (con confirmación).

# Base de Datos

    El proyecto utiliza una base de datos MySQL con dos tablas:

**Administradores:**
    Almacena las credenciales de los administradores para acceder a la interfaz de gestión de mensajes.
    
**mensajes:**
    Almacena los mensajes enviados por los usuarios a través del formulario de contacto.

## Importar la Base de Datos

1. **Importar database.sql**:
    Asegúrate de tener el archivo database.sql en la raíz del proyecto.
    Abre phpMyAdmin o cualquier cliente de MySQL.
    Crea una base de datos llamada prueba_tecnica.
    Importa el archivo database.sql en la base de datos prueba_tecnica.

2. **Crear la base de datos manualmente (opcional)**:
    Si no puedes importar database.sql, puedes usar el archivo database.txt para crear las tablas manualmente.
    Copia el contenido de database.txt y ejecútalo en tu cliente de MySQL (por ejemplo, phpMyAdmin o la terminal de MySQL).