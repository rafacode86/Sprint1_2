<?php
    /*Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

    Condicions:

    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà. */

    function evaluar($nota) {
        if ($nota >= 60) {
            echo "Primera Divisió \n";
        } elseif ($nota >= 45) {
            echo "Segona Divisió \n";
        } elseif ($nota >= 33) {
            echo "Tercera Divisió \n";
        } else {
            echo "L'estudiant reprovarà \n";
        }
    }
    evaluar(45);
?>