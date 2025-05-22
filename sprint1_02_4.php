<?php
    /*Fes un programa que implementi una funció on es compti fins a un nombre determinat. 
    Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte 
    igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant 
    a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas. */

    function contar(int $salto, int $numFinal = 10) {
        
        if ($numFinal < 1 || $salto <= 0) {
            echo "Introduzca un numero valido";
            return;
        } else {
            for ($i = 0; $i <= $numFinal; $i+= $salto) {
                echo $i . "\n";
            }   
        }  
    }
    
    contar(2);
?>