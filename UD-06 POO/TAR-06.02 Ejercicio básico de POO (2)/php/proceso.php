<?php
    require_once 'Fecha.php';

    $fecha = $_GET['fecha'];

    $objFecha = new Fecha();
    echo $objFecha->convertirFecha($fecha);
    echo '<br />';
    echo $objFecha->numDias;

?>