<?php
    //And &&
    $join = (8 > 4)  && (19 < 20);
    print("Ambos True: " . $join);

    $join = (8 > 4)  && (19 > 20);
    print("<br/>Solo un True: " . $join);

    //Or ||
    $either = (8 > 4) || (19 > 20);
    print("<br/>" . $either);

    $either = (8 > 10) || (3==4);
    print("<br/>". $either);
     
?>