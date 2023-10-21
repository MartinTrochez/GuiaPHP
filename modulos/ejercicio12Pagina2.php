<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $ingresos = $_POST["ingresos"];

    echo "Hola, $nombre. ";

    switch ($ingresos) {
        case "1-1000":
            echo "Tus ingresos mensuales están en el rango de 1-1000. No debes pagar impuestos a las ganancias.";
            break;
        case "1001-3000":
            echo "Tus ingresos mensuales están en el rango de 1001-3000. No debes pagar impuestos a las ganancias.";
            break;
        case ">3000":
            echo "Tus ingresos mensuales superan los 3000. Debes pagar impuestos a las ganancias.";
            break;
        default:
            echo "Selecciona un rango de ingresos válido.";
    }
}