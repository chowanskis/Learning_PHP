<?php
function rectangle($a, $b) // funkcja licząca pole prostokąta
{
    $p = (2 * $a) + (2 * $b); // obliczanie obwodu
    return $p; // zwracanie wynik
}

$a = 12;
$b = 34;

$rect = rectangle($a, $b);

printf ("Obwód prostokąta o bokach %d i %d wynosi %d", $a, $b, $rect);
?>