<?php include_once '../../config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
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
        <a href="<?php echo BASE_URL; ?>vistas/libro/form_libro.php" class="btn">
            Ir al Formulario
        </a>

        <p>Esta es la sección de contenido principal de los libros registrados.</p>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Autor</th>
                        <th>Nombre del Libro</th>
                        <th>Número de Páginas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Gabriel García Márquez</td>
                        <td>Cien Años de Soledad</td>
                        <td>417</td>
                        <td>Editar | Eliminar</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>J.K. Rowling</td>
                        <td>Harry Potter y la Piedra Filosofal</td>
                        <td>223</td>
                        <td>Editar | Eliminar</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>N°</th>
                        <th>Autor</th>
                        <th>Nombre del Libro</th>
                        <th>Número de Páginas</th>
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
            const tablaLibrosBody = document.querySelector('table tbody');
            const librosGuardados = localStorage.getItem('libros');
            const librosArray = librosGuardados ? JSON.parse(librosGuardados) : [];

            // Función para actualizar la tabla
            function actualizarTabla() {
                tablaLibrosBody.innerHTML = ''; // Limpiar la tabla
                librosArray.forEach((libro, index) => {
                    const row = tablaLibrosBody.insertRow();
                    const cellNumero = row.insertCell();
                    const cellAutor = row.insertCell();
                    const cellNombre = row.insertCell();
                    const cellPaginas = row.insertCell();
                    const cellAcciones = row.insertCell();

                    cellNumero.textContent = index + 1;
                    cellAutor.textContent = libro.autor;
                    cellNombre.textContent = libro.nombreLibro;
                    cellPaginas.textContent = libro.paginas;
                    cellAcciones.textContent = 'Editar | Eliminar'; // Placeholder para acciones futuras
                });
            }

            // Actualizar la tabla al cargar la página
            actualizarTabla();

            // Limpiar localStorage al salir de la página (opcional, para este ejemplo)
            // window.addEventListener('beforeunload', function() {
            //     localStorage.removeItem('libros');
            // });
        });
    </script>
</html>