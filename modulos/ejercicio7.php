<?php
echo "<h4>
Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string tres).
<br>
Para ver si una variable es igual a cierto valor debemos plantear una condición similar a:
</h4>";
echo "<br>";
echo "<br>";
$numero = rand(1, 3);
  if ($numero == 1) {
      echo "uno";
  } else {
      if ($numero == 2) {
          echo "dos";
      } else {
          echo "tres";
      }
  }
?>