<?php
    /*Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

    Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari. */

    function isBitten() {
        $bite = rand(0, 1);
        if ($bite == 1) {
            echo "TRUE";
        } else {
            echo "FALSE";
        }
    }
    
    isBitten();
?>