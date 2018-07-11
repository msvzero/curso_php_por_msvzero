<?php

    function imprimirFigura($filas, $columnas) {
        $fila = 0;
        while($fila < $filas) {
            $columna = 0;
            while($columna < $columnas) {
                print("* ");
                $columna++;
            }
            print("<br/>");
            $fila++;
        }

    }
    imprimirFigura(5, 5);
    print("<br/>");
    imprimirFigura(5, 10);
    print("<br/>");
    imprimirFigura(25, 50);
    print("<br/>");

    

?>