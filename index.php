<?php
$naves = array(
    "cohetes",
    "satélites",
    "naves",
    "transbordadores",
    "sondas espaciales",
    "módulos de aterrizaje"
);
$buscador = strtolower($_POST["buscador"]);
if (in_array($buscador,$naves)) {
    echo "Ese tipo de nave existe";
} else {
    echo "Ese tipo de nave no existe";
};
echo "</br>";
echo '<a href="index.html">Volver</a>';
?>