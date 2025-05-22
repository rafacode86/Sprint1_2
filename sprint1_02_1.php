<?php
    /*Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.

    Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla
     */
    $texto = "Esto es un String";
    $numero = 38;
    $decimal = 3.14;
    $boleano = TRUE;
    define("NOMBRE", "Rafa");

    echo "$texto \n";
    echo "$numero  \n";
    echo "$decimal  \n";
    echo "$boleano  \n";
    echo "<h1>" . NOMBRE . "<h1>";
?>