<?php 

    $edad = 18;
    $ciudadano = true;

    $nota = 18;

    if($edad >= 18){
        print("Ya puedes votar");
    }else {
        print("No puedes votar");
    }

    if($edad >= 18 && $ciudadano == true){
        print("<br/>Todavia puedes votar");
    }


    if($nota > 90){
        print("<br/>Master");
    } else if($nota < 50 && $nota > 20) {
        print("<br/>Y bueno...");
    } else if($nota < 20) {
        print("<br/>Desastre..");
    }else {
        print('<br/>Imposible saber');
    }
?>