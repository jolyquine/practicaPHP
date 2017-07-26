<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Tarea 1</title>
</head>
<body>
<strong> <p>Listando nombres e invirtiendo los valores en el array</p> </strong>
<?php
$listar = [
  "Yerika", "Naco", "Karina", "Cuacao", "Montiono", "Tuesa"
];

print_r($listar);
echo "<br>";
echo "<br>";
echo "El orden invertido de las personas es: ";
echo "<br>";

for ($i = count($listar); $i > -1; --$i) {
  echo $listar[$i];
  echo "<br>";
}
?>

</body>
</html>
