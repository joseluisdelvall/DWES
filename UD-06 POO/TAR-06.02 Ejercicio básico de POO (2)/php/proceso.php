<?php
    require_once 'Fecha.php';

    $fecha = $_GET['fecha'];

    $objFecha = new Fecha();
    $objFecha->convertirFecha($fecha);
    $objFecha->esBisiesto();

    echo $objFecha->visualizarFecha()."<br/>";
    echo $objFecha->visualizarDiasMes();

?>