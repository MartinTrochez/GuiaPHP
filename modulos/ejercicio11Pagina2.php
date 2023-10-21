<?php
$cantidad = 0;
if (isset($_REQUEST['check1'])) {
    $cantidad++;
}
if (isset($_REQUEST['check2'])) {
    $cantidad++;
}
if (isset($_REQUEST['check3'])) {
    $cantidad++;
}
if (isset($_REQUEST['check4'])) {
    $cantidad++;
}
echo $_REQUEST['nombre'];
echo "<br>";
echo "<p>Practica $cantidad deportes.</p>";