<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Clase e ID</title>
    <link rel="stylesheet" href="../../assets/estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>Registro de Libro</h2>
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
</body>
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