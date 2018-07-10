<?php 
//Constantes definidas por el ususario
define("SCREENWIDTH", 1920);
define("SCREENHEIGHT", 1080);

//Uso de constantes
print("Width: " . SCREENWIDTH);
print("<br/>Height: " . SCREENHEIGHT);

//Constantes del entorno, pueden ser utilizado en cualquier lugar.
print("<br/>Nombre del archivo: " . __FILE__);


?>