<!DOCTYPE html>
<html>
    <head>
        <title>Integrando PHP con HTML</title>
    </head>
    <body>
        <h1>Bienvenido al PHP</h1>
        <p>fecha: <?php print(date('l jS \of F Y h:i:s A'));?></p>
        <h2>PHP Block:</h2>
        <?php 
            print("<p>Bienvenido al curso de especializacion de PHP</p>");
            print("<p><strong>Instructor: Martin Serratti</strong></p>");
        ?>
    </body>
</html>