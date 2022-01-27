<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Nombre de las imágenes</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
        <link rel="stylesheet" href="./css/estiloLogin.css">
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="index.html">Subir imágenes</a>
                </li>
                <li>
                    <a href="mostrarG.php">Mostrar Galería</a>
                </li>
                <li>
                    <a href="#">Mostrar Nombres</a>
                </li>
            </ul>
        </nav>
         <!-- Contenedor central -->
        <div class="contenedor">
            <h2>Nombres de imágenes</h2>
            <ul>
            <?php
                // Definir directorio donde se encuentran las imágenes
                $directorio = './subido/imagenes';
                // Escanear directorio y almacenar los nombres de los archivos en un array
                $ficheros1  = scandir($directorio);
                // Recorrer el array
                foreach ($ficheros1 as $key => $value) {
                    // Evitar los directorios
                    if($value!="." && $value!=".."){
                        // Añadir los nombres al html
                        echo "<li>".$value."</li>";
                    }
                }
            ?>
            </ul>
        </div>
    </body>
</html>






