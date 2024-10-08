<!DOCTYPE html>
<html>
    <head>
        <title>Nombres y Fotos</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            // CONSTANTE RUTA DE LA CARPETA DE LAS IMAGENES
            $CARPETA = "img/";

            // GUARDAR EN ARRAY NOMBRE Y RUTA IMAGEN
            $imagenes = array(
                "Manzana" => "manzana.jpg",
                "Pera" => "pera.jpg",
            );
            $imagenes["Platano"] = "platano.jpg";
            print_r($imagenes);
        ?>
        <h1>Frutas</h1>
        <?php
            foreach($imagenes as $nombre => $url){
                echo "<figure>";
                echo '<img src="'.$CARPETA.$url.'" />';
                echo '<figcaption>'.$nombre.'</figcaption>';
                echo "</figure>";
            }
        ?>
    </body>
</html>