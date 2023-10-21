<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"];
    $clave1 = $_POST["clave1"];
    $clave2 = $_POST["clave2"];

    if (sonClavesDistintas($clave1, $clave2)) {
        echo "Las claves ingresadas son distintas. Por favor, inténtelo de nuevo.";
    } else {
        echo "Registro exitoso. Usuario: $usuario, Clave: $clave1";
    }
}

function sonClavesDistintas($clave1, $clave2)
{
    return $clave1 !== $clave2;
}