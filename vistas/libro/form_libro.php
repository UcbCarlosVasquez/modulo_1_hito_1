<?php include_once '../../config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Libros</title>
    <link rel="stylesheet" href="../../assets/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            <h3>
                Registro de Libro
                <a href="<?php echo BASE_URL; ?>vistas/libro/index_libro.php" class="btn">
                    Atras
                </a>
            </h3>
            <form action="#" method="POST" id="form-nuevo-libro">
                <div class="form-group">
                    <label for="input-autor">Autor:</label>
                    <input type="text" id="input-autor" name="autor" required>
                </div>
                <div class="form-group">
                    <label for="input-nombre-libro">Nombre del Libro:</label>
                    <input type="text" class="input-nombre-libro" name="nombre_libro" id="nombre_libro" required>
                </div>
                <div class="form-group">
                    <label for="input-paginas">Número de Páginas:</label>
                    <input type="number" id="input-paginas" name="paginas" value="0" min="1" required>
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
    document.addEventListener('DOMContentLoaded', function() {
        const formLibro = document.getElementById('form-nuevo-libro');
        const botonEnviar = document.getElementById('enviar_datos');

        botonEnviar.addEventListener('click', function(event) {
            event.preventDefault();

            const autor = document.getElementById('input-autor').value.trim();
            const nombreLibro = document.getElementById('nombre_libro').value.trim();
            const paginas = document.getElementById('input-paginas').value.trim();

            if (autor === "" || nombreLibro === "" || paginas === "") {
                swal({
                    title: "¡Error!",
                    text: "Por favor, completa todos los campos.",
                    icon: "error"
                });
                return;
            }

            const nuevoLibro = {
                autor: autor,
                nombreLibro: nombreLibro,
                paginas: parseInt(paginas)
            };

            let librosGuardados = localStorage.getItem('libros');
            let librosArray = librosGuardados ? JSON.parse(librosGuardados) : [];
            librosArray.push(nuevoLibro);
            localStorage.setItem('libros', JSON.stringify(librosArray));

            swal({
                title: "¡Éxito!",
                text: "Libro guardado correctamente.",
                icon: "success",
                buttons: false,
                timer: 1500
            }).then(() => {
                window.location.href = '<?php echo BASE_URL; ?>vistas/libro/index_libro.php';
            });
        });
    });
</script>

</html>