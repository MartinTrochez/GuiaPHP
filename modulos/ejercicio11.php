<h4>
    Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar una serie de
    deportes que practica (futbol, basket, tennis, voley)
    Mostrar en la página que procesa el formulario la cantidad de deportes que practica.
</h4>
<br>
<br>
<form method="post" action="ejercicio11.php">
    Ingrese el nombre:
    <label>
        <input type="text" name="nombre">
        <br>
        Deportes que practica:<br>
    </label>
    <label>
        <input type="checkbox" name="futbol">
        Fútbol
    </label>
    <br>
    <label>
        <input type="checkbox" name="basquet">
        Basquet
    </label>
    <br>
    <label>
        <input type="checkbox" name="tenis">
        Tenis
    </label>
    <br>
    <label>
        <input type="checkbox" name="volley">
        Volley
    </label>
    <br>
    <input type="submit" value="confirmar">
</form>