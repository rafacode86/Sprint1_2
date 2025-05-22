<?php
    /*Imprimeix per pantall
    a "Hello, World!" utilitzant una variable. En acabat:

    Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
    Imprimeix per pantalla la mida (longitud) de la variable.
    Imprimeix per pantalla l'string en ordre invers de caràcters.
    Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix 
    per pantalla la concatenació de tots dos strings.*/

    $cadenaTexto = "Hello, World!";
    echo strtoupper($cadenaTexto) . "\n";
    echo strlen($cadenaTexto) . "\n";
    echo strrev($cadenaTexto) . "\n";

    $nuevoTexto = "Aquest es el curs de PHP " . ($cadenaTexto);
    echo $nuevoTexto . "\n";

?>