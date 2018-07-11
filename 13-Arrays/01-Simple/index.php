<?php 
$notas = array(3.2, 4.2, 5.5, 8.5);
print("La primera nota es: ". $notas[0]);
print("<br/>La ultima nota es: ". $notas[count($notas)-1]);

$marcas = [
    "Audi",
    "Toyota",
    "Suzuki"
];
print("<br/>Marcas de autos:<br/>");
for($contador=0; $contador < count($marcas); $contador++) {
    print($marcas[$contador]."<br/>");
}


print("<br/>************************<br/>");
foreach ($notas as  $nota) {
    print($nota . "<br/>");
}
print("Marcas de autos:<br/>");
foreach ($marcas as  $marca) {
    print($marca . "<br/>");
}
?>