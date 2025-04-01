<?php include_once '../config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 5</title>
    <link rel="stylesheet" href="../assets/estilos.css">
</head>

<body>
    <header>
        <?php include '../common/cabecera.php'; ?>
    </header>
    <nav>
        <?php include '../common/menu.php'; ?>
    </nav>
    <main>
        <h2>Contenido Principal de la Página 5</h2>
        <p>Esta es la página final, donde puedes incluir información de contacto adicional o un resumen.</p>
        <p>Puedes usar una lista para datos de contacto:</p>
        <ul>
            <li>Email: contacto@ejemplo.com</li>
            <li>Teléfono: +123 456 7890</li>
            <li>Dirección: Calle Falsa 123</li>
        </ul>
        <img src="../assets/imagen_pagina5.jpg" alt="Imagen de la Página 5" width="300">
    </main>
    <footer>
        <?php include '../common/pie_de_pagina.php'; ?>
    </footer>
</body>

</html>