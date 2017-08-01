<?php
echo "Valores Recibidos por POST<br>";
echo "El nombre registrado es: <strong>".$_POST['nombre']."</strong><br>";
echo "El apellido registrado es: <strong>".$_POST['apellido']."</strong><br>";
echo "El genero seleccionado es: <strong>".$_POST['genero']."</strong><br>";
echo "Los deportes seleccionados son:";

foreach ($_POST['deporte'] as $key => $value) {
  echo $value." ";
}

echo "<br>Los comentarios fueron:<strong>".$_POST['comentarios']."</strong>";
?>
