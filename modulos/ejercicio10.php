<h4>
    Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de tipo radio que nos
    permitan seleccionar si la persona: 1-no tiene estudios, 2-estudios primarios y 3-estudios secundarios.
    En la página que procesa el formulario mostrar el nombre de la persona y un mensaje indicando el tipo de estudios
    que posee.
</h4>

<br>
<br>
<form action="ejercicio10Pagina2.php" method="post">
    Ingrese Nombre:
    <label>
        <input type="text" name="nombre">
    </label>
    <br>
    Estudios:
    <br>
    <label>
        <input type="radio" name="radio1" value="sin">
        Sin estudios
    </label>
    <br>
    <label>
        <input type="radio" name="radio1" value="primario">
        Estudios primarios
    </label>
    <br>
    <label>
        <input type="radio" name="radio1" value="secundario">
        Estudios secundarios
    </label>
    <br>
    <input type="submit" value="Confirmar">
</form>
