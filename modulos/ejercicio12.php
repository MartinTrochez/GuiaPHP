<h4>
    Confeccionar un formulario que solicite el ingreso del nombre de una persona y un control select (en este último
    permitir la selección de los ingresos mensuales de la persona: 1-1000,1001-3000,>3000)
    En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si supera 3000)
</h4>
<br>
<br>
<h1>Income Tax Calculator</h1>
<form method="post" action="ejercicio12Pagina2.php">
    Enter your name:
    <input type="text" name="nombre">
    <br>
    Select your monthly income range:
    <select name="ingresos">
        <option value="1-1000">1-1000</option>
        <option value="1001-3000">1001-3000</option>
        <option value=">3000">3000</option>
    </select>
    <br>
    <input type="submit" value="Submit">
</form>