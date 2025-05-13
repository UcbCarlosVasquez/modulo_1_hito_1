<?php include_once '../../config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Estantes</title>
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
                Registro de Estante
                <a href="<?php echo BASE_URL; ?>vistas/estante/index_estante.php" class="btn">
                    Atras
                </a>
            </h3>
            <form action="#" method="POST" id="form-nuevo-estante">
                <div class="form-group">
                    <label for="input-tipo-de-estante">Tipo de estante:</label>
                    <select name="input-tipo-de-estante" id="input-tipo-de-estante" required>
                        <option value="">__SELECCIONE__</option>
                        <option value="MADERA">MADERA</option>
                        <option value="FIERRO">FIERRO</option>
                    </select>
                    <!-- <input type="text" id="input-tipo-de-estante" name="input-tipo-de-estante" required> -->
                </div>
                <div class="form-group">
                    <label for="input-cantidad-filas">Cantidad De Filas:</label>
                    <input type="number" id="input-cantidad-filas" name="input-cantidad-filas" value="0" min="1" required>
                </div>
                <div class="form-group">
                    <label for="input-cantidad-columnas">Cantidad De Columnas:</label>
                    <input type="number" id="input-cantidad-columnas" name="input-cantidad-columnas" value="0" min="1" required>
                </div>
                <div class="form-group">
                    <label for="input-nombre-de-estante">Tipo de estante:</label>
                    <input type="text" id="input-nombre-de-estante" name="input-nombre-de-estante" required>
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
    //     const tipo_de_estante = document.getElementById('input-tipo-de-estante').value;
    //     const cantidad = document.getElementById('input-cantidad-filas').value;
    //     const paginas = document.getElementById('input-paginas').value;

    //     console.log(`tipo_de_estante: ${tipo_de_estante}, Nombre del estante: ${cantidad}, Páginas: ${paginas}`);
    // });
    document.addEventListener('DOMContentLoaded', function() {
        const formestante = document.getElementById('form-nuevo-estante');
        const botonEnviar = document.getElementById('enviar_datos');

        botonEnviar.addEventListener('click', function(event) {
            event.preventDefault();

            const tipo_de_estante = document.getElementById('input-tipo-de-estante').value.trim();
            const nombre_de_estante = document.getElementById('input-nombre-de-estante').value.trim();
            const cantidad_filas = document.getElementById('input-cantidad-filas').value.trim();
            const cantidad_columnas = document.getElementById('input-cantidad-columnas').value.trim();
            // const paginas = document.getElementById('input-paginas').value.trim();

            if (tipo_de_estante === "" || cantidad_filas === "" || cantidad_columnas === "" || nombre_de_estante === "" || nombre_de_estante === "") {
                swal({
                    title: "¡Error!",
                    text: "Por favor, completa todos los campos.",
                    icon: "error"
                });
                return;
            }

            const nuevoestante = {
                tipo_de_estante: tipo_de_estante,
                cantidad_filas: parseInt(cantidad_filas),
                cantidad_columnas: parseInt(cantidad_columnas),
                nombre_de_estante: nombre_de_estante.toUpperCase(),
            };

            let estantesGuardados = localStorage.getItem('estantes');
            let estantesArray = estantesGuardados ? JSON.parse(estantesGuardados) : [];
            estantesArray.push(nuevoestante);
            localStorage.setItem('estantes', JSON.stringify(estantesArray));

            swal({
                title: "¡Éxito!",
                text: "estante guardado correctamente.",
                icon: "success",
                buttons: false,
                timer: 1500
            }).then(() => {
                window.location.href = '<?php echo BASE_URL; ?>vistas/estante/index_estante.php';
            });
        });
    });
</script>

</html>