<?php
echo "<h4>
Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
La estructura for permite incrementar una variable de 2 en 2

 </h4>";
echo "<br>";
echo "<br>";

echo "Tabla del 2 con el for";
echo "<br>";
for ($f = 2; $f <= 20; $f = $f + 2) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "Tabla del 2 con el while";
echo "<br>";
$f = 2;
while ($f <= 20) {
    echo $f;
    echo "<br>";
    $f = $f + 2;
}
echo "<br>";
echo "Tabla del 2 con el do/while";
echo "<br>";
$f = 2;
do {
    echo $f;
    echo "<br>";
    $f = $f + 2;
} while ($f <= 20);
?>