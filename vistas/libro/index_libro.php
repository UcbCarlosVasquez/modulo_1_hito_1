<?php include_once '../../config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
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

</html>