<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subiendo imagen</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
        <link rel="stylesheet" href="./css/estiloLogin.css">
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
    <body>
        <div class="contenedor">
            <?php
                // Llamar a la función subida
                subida()
            ?>
        </div>
    </body>
</html>

<?php

/**
 * Función para la subida de archivos al servidor
 */
function subida(){
    // Comprobar si se ha subido un fichero
    if(isset($_FILES['fichero'])){

        // Array sobre las extensiones de ficheros permitidas
        $extPermitidas = array('pdf');
        $nombreFichero = $_FILES['fichero']['name'];
        $extensionFichero = pathinfo($nombreFichero, PATHINFO_EXTENSION);

        // Validar si la extensión del fichero es .pdf
        if (in_array($extensionFichero, $extPermitidas)) {
            // Directorio donde se subirán los ficheros
            $dir_subida = './subido/pdf/';
            $fichero_subido = $dir_subida . basename($_FILES['fichero']['name']);
            
            echo '<pre>';
            if (move_uploaded_file($_FILES['fichero']['tmp_name'], $fichero_subido)) {
                echo "<h2>El fichero es válido y se subió con éxito.</h2>";
            } else {
                echo "<h2>Error de subida de ficheros</h2>";
            }
            
            print "</pre>";
        }
        else{
            echo "<h2>Archivo no válido</h2>";
            echo "<h3>El archivo debe ser tipo pdf";
        }
        
    }
    else{
        echo "<h2>No deberías de estar en este lugar...</h2>";
    }
    
    // Tras 5 segundos, volver al inicio
    header("refresh: 5; url=./index.html");
}


?>