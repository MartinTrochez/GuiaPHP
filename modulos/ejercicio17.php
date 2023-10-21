<h4>
    Crear un vector asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente
    por su nombre. Imprimir una componente del vector.
</h4>
<br>
<br>

<?php
$usuarios = array(
    "usuario1" => "clave1",
    "usuario2" => "clave2",
    "usuario3" => "clave3",
    "usuario4" => "clave4",
    "usuario5" => "clave5"
);
$nombreUsuario = "usuario2";
if (array_key_exists($nombreUsuario, $usuarios)) {
    echo "La clave de $nombreUsuario es: " . $usuarios[$nombreUsuario];
} else {
    echo "Usuario no encontrado.";
};