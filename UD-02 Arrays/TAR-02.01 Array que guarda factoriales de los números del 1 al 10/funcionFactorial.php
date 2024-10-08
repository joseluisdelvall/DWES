<?php
    function factorial($numero){
        $factorial = 1;
        for($i = 1; $numero >= $i; $i++){
            $factorial *= $i;
        }
        return $factorial;
    }

    function visualizarTipo($factoriales) {
        var_dump($factoriales);
    }
?>