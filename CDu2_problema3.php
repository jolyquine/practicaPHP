<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Tarea 1</title>
</head>
<body>
<p>Buscar listado</p>
<?php
$listar = [
  "Yerika", "Naco", "Karina", "Cuacao", "Montiono", "Tuesa", "Amaranta", "Kataniapo", "Turumai"
];
$busqueda = [
  "Kataniapo", "Iyanara", "Naco"
];
echo "<strong>listado<br></strong>";
print_r($listar);
echo "<br><br>";
echo "<strong>busqueda<br></strong>";
print_r($busqueda);
echo "<br>";

for ($i = 0; $i < count($listar) ; ++$i) {
  echo "<br>";
  for($j = 0; $j < count($busqueda); ++$j){

    if ($listar[$i] === $busqueda[$j]){
    echo "<br><strong>El nombre: ".$listar[$i]." se encuentra en la ubicacion numero ".$j." del busqueda<br></strong>";
    } else if ($listar[$j] != $busqueda[$i]) {
      echo "<br>El nombre: ".$listar[$i]." no se encuentra en la ubicacion numero ".$j." de la busqueda<br>";

    }

  }


}


?>

</body>
</html>
