<?php

    $alertColor = "Naranja";
    switch($alertColor) {
        case "Naranja":
        case "naranja":
            echo("<h1 style='color: orange'>Alerta naranja</h1>");
            break;
        case "rojo":
            echo("<h1 style='color: red'>Alerta roja</h1>");
            break;
        default:
            echo("<h1>Alerta</h1>");
    }

?>