<?php
    require_once 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\IOFactory; // Utilizamos una clase de PHP hecha por PhpSpreadsheet

    // $nombreArchivo = 'xlsx\Lista 2DAW 24-25.xlsx'; // Ruta del excel
    $nombreArchivo = 'xlsx\ListaEdades.xlsx'; // Ruta del excel
    $documento = IOFactory::load($nombreArchivo); // Cargamos el archivo (Todas las hojas)
    $totalHojas = $documento->getSheetCount(); // Contamos el total de hojas del excel
    // echo $totalHojas.'<br/>'; // Mostramos el número de hojas

    for($indiceHoja = 0; $indiceHoja < $totalHojas; $indiceHoja++) { // Con las hojas iniciamos en 0, con las filas en 1
        $hojaActual = $documento->getSheet($indiceHoja); // $hojaActual coge individualmente las hojas y las almacena para usarlas una a una
        $numeroFilas = $hojaActual->getHighestDataRow(); // Nos dice el número de filas que tiene el excel, máximo 400
        $ultimaLetra = $hojaActual->getHighestColumn(); // Nos dice la letra de la última columna del excel, máximo 400
        for($indiceFila = 1; $indiceFila <= $numeroFilas; $indiceFila++) { // Desde la primera fila hasta la última existente
            $primeraColumna = $hojaActual->getCell('A'.$indiceFila); // Mostramos la columna completa con esa letra, en este caso A
            $segundaColumna = $hojaActual->getCell('B'.$indiceFila); // Mostramos la columna completa B con esa letra, en este caso B
            echo $primeraColumna.' - '.$segundaColumna.'<br />'; // Imprime ambas columnas separadas por un guión
        }
    }
?>