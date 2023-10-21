<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $pedido = "";

    if (isset($_POST["pizzaJamonQueso"]) && $_POST["cantidadJamonQueso"] > 0) {
        $pedido .= "Jamon y queso: " . $_POST["cantidadJamonQueso"] . " unidades\n";
    }

    if (isset($_POST["pizzaNapolitana"]) && $_POST["cantidadNapolitana"] > 0) {
        $pedido .= "Napolitana: " . $_POST["cantidadNapolitana"] . " unidades\n";
    }

    if (isset($_POST["pizzaMuzzarella"]) && $_POST["cantidadMuzzarella"] > 0) {
        $pedido .= "Muzzarella: " . $_POST["cantidadMuzzarella"] . " unidades\n";
    }

    $pedidoCompleto = "Nombre: $nombre\nDirección: $direccion\n$pedido\n";
    $file = fopen("pedidos.txt", "a");
    if ($file) {
        fputs($file, "Nombre: $nombre\nDirección: $direccion\n$pedido\n");
        fclose($file);
        echo "Pedido confirmado. Gracias por su pedido.";
    } else {
        echo "Error al abrir el archivo de pedidos.";
    }
}