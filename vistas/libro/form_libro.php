<?php include_once '../../config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Libros</title>
    <link rel="stylesheet" href="../../assets/estilos.css">
</head>

<body>
    <header>
        <?php include '../../common/cabecera.php'; ?>
    </header>
    <nav>
        <?php include '../../common/menu.php'; ?>
    </nav>
    <main>
        <div class="form-container">
            <h2>
                Registro de Libro
                <a href="<?php echo BASE_URL; ?>vistas/libro/index_libro.php" class="btn">
                    Atras
                </a>
            </h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="autor">Autor:</label>
                    <input type="text" id="input-autor" name="autor" required>
                </div>
                <div class="form-group">
                    <label for="nombre_libro">Nombre del Libro:</label>
                    <input type="text" class="input-nombre-libro" name="nombre_libro" id="nombre_libro" required>
                </div>
                <div class="form-group">
                    <label for="paginas">Número de Páginas:</label>
                    <input type="number" id="input-paginas" name="paginas" required>
                </div>
                <div class="form-group">
                    <button type="submit" id="enviar_datos">Enviar</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php include '../../common/pie_de_pagina.php'; ?>
    </footer>
</body>

</html>
<script>
    // JavaScript para manejar el evento de envío del formulario
    // document.querySelector('form').addEventListener('submit', function(event) {
    //     event.preventDefault(); // Evita el envío del formulario por defecto

    //     // Aquí puedes agregar la lógica para manejar el envío del formulario
    //     const autor = document.getElementById('input-autor').value;
    //     const nombreLibro = document.getElementById('nombre_libro').value;
    //     const paginas = document.getElementById('input-paginas').value;

    //     console.log(`Autor: ${autor}, Nombre del Libro: ${nombreLibro}, Páginas: ${paginas}`);
    // });
    var buton = document.getElementById('enviar_datos');
    buton.addEventListener('click', function(event) {
        event.preventDefault(); // Evita el envío del formulario por defecto

        // Aquí puedes agregar la lógica para manejar el envío del formulario
        const autor = document.getElementById('input-autor').value;
        const nombreLibro = document.getElementById('nombre_libro').value;
        const paginas = document.getElementById('input-paginas').value;

        console.log(`Autor: ${autor}, Nombre del Libro: ${nombreLibro}, Páginas: ${paginas}`);
    });
</script>

</html>