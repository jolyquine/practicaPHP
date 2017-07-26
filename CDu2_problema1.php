<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Tarea 1</title>
</head>
<body>
<p>Calculando el factorial de 4 al 10</p>
<?php
$fac = 24; //sabiendo el valor del factorial 4
$i = 4;
  do {
    $i++;
    $fac = $fac * $i;
    echo "El valor de Factorial <strong>".$i."</strong> es: ".$fac;
    echo "<br>";

  } while ($i <10);
?>

</body>
</html>
