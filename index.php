<?php
$numero = (int)($_POST["cantidad"]);
$planetas=array_fill(0,$numero,"Inhabitado");
print_r("La cantidad de planetas que tiene el sistema solar es ". count($planetas));
echo "</br>";
echo '<a href="index.html">Volver</a>';
?>