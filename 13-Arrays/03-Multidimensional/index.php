<?php
    $empleados = array(
        "Bob" => array (
            "idNumber" => 121,
            "departamento" => "cuentas",
            "salario" => 85000
        ),
        "Juan" => array (
            "idNumber" => 131,
            "departamento" => "ventas",
            "salario" => 78000
        ),
        "Martin" => array (
            "idNumber" => 141,
            "departamento" => "administrativo",
            "salario" => 45000
        )
    );

    print("EL salario de Martin es: " . $empleados['Martin']['salario']);
    print("<br/>");
    print("En que departamento trabaja Bob: " . $empleados['Bob']['departamento']);
?>