<?php
$naves=array(
    "Columbia"=>2040,
    "Challenger"=>2040,
    "Discovery"=>2040,
    "Atlantis"=>2040,
    "Endeavour"=>2050,
    "Enterprise"=>2055,
    "Pathfinder"=>2035,
    "Freedom"=>2060
);
$masaTotal = array_reduce($naves,fn($sumador,$naves) => $sumador + $naves);
print_r("La masa total de toda la flota es de " . $masaTotal . " Toneladas.");
echo "</br>";
echo '<a href="index.html">Volver</a>';
?>