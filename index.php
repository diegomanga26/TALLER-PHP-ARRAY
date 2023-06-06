<?php
$aliens = array(
    "Wookiees",
    "Hutts",
    "Ewoks",
    "Twi'leks",
    "Droides astromecánicos",
    "Wookiees",
    "Droides astromecánicos"
);
print_r($aliens);
echo "<hr>";
$aliensUniq = array_unique($aliens);
print_r($aliensUniq);
echo "<hr>";
echo '<a href="index.html">Volver</a>';
?>