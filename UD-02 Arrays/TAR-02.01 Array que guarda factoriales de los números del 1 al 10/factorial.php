<html>
    <head>
        <title>Prueba PHP</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            require_once 'funcionFactorial.php';
            $numeroMin = 0;
            $numeroMax = 10;

            // Guardar en ARRAY los factoriales del numero 0 al 10
            for($i = $numeroMin; $i <= $numeroMax; $i++){
                $factoriales[$i] = factorial($i);
            }
            //visualizarTipo($factoriales);
        ?>
		<table>
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Factorial</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Visualizar desde el ARRAY (diferentes formas)

                    for($i = $numeroMin; $i <= $numeroMax; $i++){
                        echo "<tr><td>$i</td><td>$factoriales[$i]</td></tr>";
                    }

                    /*
                    for($i = $numeroMin; $i <= count($factoriales)-1; $i++){
                        echo "<tr><td>$i</td><td>$factoriales[$i]</td></tr>";
                    }
                    */

                    //foreach para revisar codigo
                    /*
                    foreach($factoriales as $i => $factorial) {
                        echo "<tr><td>$i</td><td>$factorial</td></tr>";
                    }
                    */
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        Jose Luis del Valle del Pino
                    </td>
                </tr>
            </tfoot>
		</table>
        <a id="botonVolver" href="#">Volver</a>
    </body>
</html>