<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Galería de imágenes</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
        <link rel="stylesheet" href="./css/estiloLogin.css">
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="stylesheet" href="./css/modal.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="index.html">Subir imágenes</a>
                </li>
                <li>
                    <a href="#">Mostrar Galería</a>
                </li>
                <li>
                    <a href="mostrarN.php">Mostrar Nombres</a>
                </li>
            </ul>
        </nav>
        <!-- Modal para abrir imagen en grande -->
        <div id="myModal" class="modal">

            <!-- Boton de cerrar -->
            <span id="close">&times;</span>

            <!-- Contenido del medal (Imagen) -->
            <img class="modal-content" id="img01">

            <!-- Caption del modal (Texto de la imagen) -->
            <div id="caption"></div>
        </div>
        <!-- Contenedor central -->
        <div class="contenedor">
            <h2>Galería de imágenes</h2>
            <div>
            <?php
                // Definir directorio donde se encuentran las imágenes
                $directorio = './subido/imagenes';
                // Escanear directorio y almacenar los nombres de los archivos en un array
                $ficheros1  = scandir($directorio);
                // Recorrer el array
                foreach ($ficheros1 as $key => $value) {
                    // Evitar los directorios
                    if($value!="." && $value!=".."){
                        // Añadir las imágenes al html
                        echo '<div class="caja">';
                        echo "<img src='./subido/imagenes/".$value."' alt='".$value."'>";
                        echo '</div>';
                    }
                }
            ?>
            </div>
        </div>
        
        <!-- Añadir script para funcionamiento del modal -->
        <script src="./js/modal.js"></script>
    </body>
</html>






