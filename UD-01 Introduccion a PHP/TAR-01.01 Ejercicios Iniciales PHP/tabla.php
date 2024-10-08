<html>
    <head>
        <title>Prueba PHP</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            require_once 'funcionFact.php';
            $numeroMin = $_GET['numeroMin'];
            $numeroMax = $_GET['numeroMax'];
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
                    for($i = $numeroMin; $i <= $numeroMax; $i++){
                        $resultadoFactorial = factorial($i);
                        echo "<tr><td>$i</td><td>$resultadoFactorial</td></tr>";
                    }
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
        <a id="botonVolver" href="index.html">Volver</a>
    </body>
</html>