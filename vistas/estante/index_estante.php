<?php include_once '../../config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estantes</title>
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
        <a href="<?php echo BASE_URL; ?>vistas/estante/form_estante.php" class="btn">
            Ir al Formulario
        </a>

        <p>Esta es la sección de contenido principal de los estantes registrados.</p>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Tipo de Estante</th>
                        <th>Numero de Filas</th>
                        <th>Número de Columnas</th>
                        <th>Nombre del Estante</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se llenará la tabla con JavaScript -->
                </tbody>
                <tfoot>
                    <tr>
                        <th>N°</th>
                        <th>Tipo de Estante</th>
                        <th>Numero de Filas</th>
                        <th>Número de Columnas</th>
                        <th>Nombre del Estante</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
    <footer>
        <?php include '../../common/pie_de_pagina.php'; ?>
    </footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tablaestantesBody = document.querySelector('table tbody');
        const estantesGuardados = localStorage.getItem('estantes');
        const estantesArray = estantesGuardados ? JSON.parse(estantesGuardados) : [];

        // Función para actualizar la tabla
        function actualizarTabla() {
            tablaestantesBody.innerHTML = ''; // Limpiar la tabla
            estantesArray.forEach((estante, index) => {
                const row = tablaestantesBody.insertRow();
                const cellNumero = row.insertCell();
                const cellTipoDe = row.insertCell();
                const cellFilas = row.insertCell();
                const cellColumnas = row.insertCell();
                const cellNombre = row.insertCell();
                const cellAcciones = row.insertCell();

                cellNumero.textContent = index + 1;
                cellTipoDe.textContent = estante.tipo_de_estante;
                cellFilas.textContent = estante.cantidad_filas;
                cellColumnas.textContent = estante.cantidad_columnas;
                cellNombre.textContent = estante.nombre_de_estante;
                cellAcciones.textContent = 'Editar | Eliminar'; // Placeholder para acciones futuras
            });
        }

        // Actualizar la tabla al cargar la página
        actualizarTabla();

        // Limpiar localStorage al salir de la página (opcional, para este ejemplo)
        // window.addEventListener('beforeunload', function() {
        //     localStorage.removeItem('estantes');
        // });
    });
</script>

</html>