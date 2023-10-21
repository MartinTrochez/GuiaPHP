<h4>
    Confeccionar un programa que muestre el archivo de pedido de pizzas via internet del punto anterior.
    <br>
    Recordemos que creamos el archivo de texto llamado pedidos.txt (grabar la página php en el mismo directorio donde se
    encuentra el archivo pedidos.txt)
</h4>
<br>
<br>

<?php
$archivoPedidos = "pedidos.txt";

if (file_exists($archivoPedidos)) {
    $contenido = file_get_contents($archivoPedidos);
    echo "<pre>$contenido</pre>";
} else {
    echo "No se encontró el archivo de pedidos.";
}