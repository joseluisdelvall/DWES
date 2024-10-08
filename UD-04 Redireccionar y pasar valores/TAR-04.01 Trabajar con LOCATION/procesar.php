<?php
    $numero = $_GET['numero'];

    /*
    *   Devuelve si el numero es par (true) o impar (false)
    *   Además guarda en la variable cuadrado (referencia) el cuadrado del numero
    */
    function esPar($numero, &$cuadrado) {
        if ($numero % 2 == 0) {
            $cuadrado = $numero * $numero;
            return true;
        } else {
            $cuadrado = $numero * $numero;
            return false;
        }
    }

    if(esPar($numero, $cuadrado)) {
        // header("Location:par.php?numero=$numero&cuadrado=$cuadrado");
        header('Location:par.php?numero='.$numero.'&cuadrado='.$cuadrado);
    } else {
        header('Location:impar.php?numero='.$numero.'&cuadrado='.$cuadrado);
    }
?>