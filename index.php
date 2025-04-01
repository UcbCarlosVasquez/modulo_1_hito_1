<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="assets/estilos.css">
</head>
<body>
    <header>
        <?php include 'common/cabecera.php'; ?>
    </header>
    <nav>
        <?php include 'common/menu.php'; ?>
    </nav>
    <main>
        <h2>Contenido Principal de la Página Principal</h2>
        <p>Esta es la página principal de nuestro sitio web. Aquí encontrarás una introducción y enlaces a las demás secciones.</p>
        <ul>
            <li>Enlace a la <a href="<?php echo BASE_URL; ?>vistas/pagina2.php">Página 2</a></li>
            <li>Información importante en la <a href="<?php echo BASE_URL; ?>vistas/pagina3.php">Página 3</a></li>
            <li>Descubre más en la <a href="<?php echo BASE_URL; ?>vistas/pagina4.php">Página 4</a></li>
            <li>Contacto y detalles en la <a href="<?php echo BASE_URL; ?>vistas/pagina5.php">Página 5</a></li>
        </ul>
        <img src="assets/imagen_encabezado.jpg" alt="Imagen del Encabezado" width="100">
    </main>
    <footer>
        <?php include 'common/pie_de_pagina.php'; ?>
    </footer>
</body>
</html>