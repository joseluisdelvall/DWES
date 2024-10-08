<!DOCTYPE html>
<html>
    <head>
        <title>Trabajo Factorial</title>
    </head>
    <body>
        <h1>Factoriales</h1>
        <?php
            require_once 'funcionFactorial.php';

            $numeroMin = 0;
            $numeroMax = 10;

            for($i = $numeroMin; $i <= $numeroMax; $i++){
                $factoriales[$i] = factorial($i);
            }

            for($i = $numeroMin; $i <= count($factoriales) - 1; $i++){
                echo '<a href="mostrar.php?factorial='.$factoriales[$i].'">'.$i.'</a><br/>';
            }

            echo "<hr/>";

            foreach($factoriales as $numero => $factorial){
                echo '<a href="mostrar.php?factorial='.$factorial.'">'.$numero.'</a><br/>';
            }
        ?>
    </body>
</html>