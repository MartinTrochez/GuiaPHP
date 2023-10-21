<h4>
    Confeccionar un programa en PHP que permita hacer el pedido de pizzas via internet.
    <br>
    El formulario debe ser:
    Nombre:[..............]
    Direccion:[...................]
    Jamon y queso:[x]
    Cantidad[...]
    <br>
    Napolitana:[x]
    Cantidad[...]
    <br>
    Muzzarella:[x]
    Cantidad[...]
    <br>
    [Confirmar]
    <br>
    Para el ingreso del nombre, dirección y cantidad de pizzas de cada tipo disponer objetos de la clase "text".
    <br>
    Disponer tres objetos de tipo "checkbox" para seleccionar los tipos de pizzas.
    Por último disponer un botón para el envío de datos: "submit".
    <br>
    Grabar en un archivo de texto llamado "pedidos.txt" cada pedido, separados por una línea de puntos entre cada
    pedido.
</h4>
<br>
<br>

<form method="post" action="ejercicio15Pagina2.php">
    Nombre: <input type="text" name="nombre">
    <br>
    Dirección: <input type="text" name="direccion">
    <br>
    <br>
    <input type="checkbox" name="pizzaJamonQueso" value="Jamon y queso"> Jamon y queso
    Cantidad: <input type="text" name="cantidadJamonQueso" value="0">
    <br>
    <br>
    <input type="checkbox" name="pizzaNapolitana" value="Napolitana"> Napolitana
    Cantidad: <input type="text" name="cantidadNapolitana" value="0">
    <br>
    <br>
    <input type="checkbox" name="pizzaMuzzarella" value="Muzzarella"> Muzzarella
    Cantidad: <input type="text" name="cantidadMuzzarella" value="0">
    <br>
    <br>
    <input type="submit" value="Confirmar Pedido">
</form>

