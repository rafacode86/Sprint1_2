<?php
    /*a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i 
    assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

    El valor de cada variable.
    La suma.
    La resta.
    El producte.
    El mòdul.
    Per N i M realitzaràs el mateix.

    Per a totes les variables (X, Y, N, M):

    El doble de cada variable.
    La suma de totes les variables.
    El producte de totes les variables.
    b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre 
    et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.*/

    $X = 2;
    $Y = 5;
    $N = 3.14;
    $M = 10.05;
    
    echo $X + $Y . "\n";
    echo $X - $Y . "\n";
    echo $X * $Y . "\n";
    echo $X / $Y . "\n";

    echo $N + $M . "\n";
    echo $N - $M . "\n";
    echo $N * $M . "\n";
    echo $N / $M . "\n";

    echo $X * 2 . "\n";
    echo $Y * 2 . "\n";
    echo $M * 2 . "\n";
    echo $N * 2 . "\n";

    # Calculadora.

    $operador = "*";
    function calculadora($numero1, $numero2, $operador) {
        echo match ($operador) {
        "*" => $numero1 * $numero2 . "\n",
        "+" => $numero2 + $numero1 . "\n",
        "-" => $numero1 - $numero2 ,
        "/" => $numero1 / $numero2,
        };
    }


    calculadora(10, 5, "+")
?>