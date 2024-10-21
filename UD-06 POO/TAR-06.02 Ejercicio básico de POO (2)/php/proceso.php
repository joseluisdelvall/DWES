<?php
    require_once 'fecha.php';

    $fecha = $_GET['fecha'];

    $objFecha = new Fecha();
    echo $objFecha->convertirFecha($fecha);
    echo '<br />';
    echo $objFecha->numDias;

?>
