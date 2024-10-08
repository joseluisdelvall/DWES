<?php

    print_r($_GET);
    echo '<br />';

    /*
    foreach ($_GET as $indice => $valor) {
        echo $indice.': '.$valor.'<br>';
    }
    */

    // Recoger datos a variables
    if(!empty($_GET['nombre'])) {
        echo 'Nombre: '.$_GET['nombre'].'<br />';
    }

    if(!empty($_GET['apellidos'])) {
        echo 'Apellidos: '.$_GET['apellidos'].'<br />';
    }

    if(isset($_GET['sexo'])) {
        echo 'Sexo: '.$_GET['sexo'].'<br />';
    }
    
    if(!empty($_GET['nomDesastre'])) {
        echo 'Nombre Desastre: '.$_GET['nomDesastre'].'<br />';
    }

    if(isset($_GET['tipo'])){
        echo 'Tipo: '.$_GET['tipo'].'<br />';
    }

    if(!empty($_GET['descripcion'])) {
        echo 'Descripcion: '.$_GET['descripcion'].'<br />';
    }

    if(isset($_GET['notificaciones'])) {
        echo 'Notificaciones: ';
        foreach ($_GET['notificaciones'] as $notif) {
            echo $notif.' ';
        }
        echo '<br />';
    }
?>