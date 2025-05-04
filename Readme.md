Desarrollar una página web compuesta de al menos 5 archivos HTML.
Subir el código fuente a GitHub.
Entregar el código fuente comprimido y el enlace a Github.
Corresponde a 15 puntos de la maestría.

# Se compilo con xampp
ubicado dentro de htdocs

## Estructura
```
└── 📁html_slim
    └── 📁assets
        └── estilos.css
        └── imagen_encabezado.jpg
        └── imagen_pagina2.jpg
        └── imagen_pagina3.jpg
        └── imagen_pagina4.jpg
        └── imagen_pagina5.jpg
        └── imagen_principal.jpg
    └── 📁common
        └── cabecera.php
        └── menu.php
        └── pie_de_pagina.php
    └── 📁vistas
        └── 📁libro
            └── form_libro.php
            └── index_libro.php
        └── pagina2.php
        └── pagina3.php
        └── pagina4.php
        └── pagina5.php
    └── captura.png
    └── config.php
    └── imagen_encabezado.jpg
    └── index.php
    └── Readme.md
```

## Comandos  de Git
``` bash
# Para guardar Cambios
$ git add .

# Añadir un adescripcion o detalle del archivo
$ git commit -m "mensaje"

# Llevar los cambios a Git
$ git push

# Traer los cambios a Git
$ git pull
```

## DOM JS
``` bash
# Las librerias nos a no usar tanto codigo
# Libreria para mensajes
$ https://cdnjs.com/libraries/sweetalert
## el dom maneja la estrcutura HTML, tengan esto en consideración
```

## Tareas
``` bash
# Manejar el tema de estante
└── 📁vistas
    └── 📁 estante
        └── form_estante.php
        └── index_estante.php
## Como objeto va a contener
# tipo de estante (cadena-string) (madera, fierro)
# cantidad de filas (entero)
# cantidad de columnas (entero)
# nombre de estante (cadena-string) (departamentos, (sistemas, contabilidad, diseño, etc))
```