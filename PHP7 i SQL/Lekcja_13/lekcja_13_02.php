<?php
define ("PI", 3.141592);

/*
 * Dany jest sześcian o boku a = 5
 * Oblicz pole i objętość sześcianu
 */
$a = 5;
$p = 6*($a**2); // pole sześcianu
$v = $a**3; // objetość sześcianu

printf("Pole sześcianu o boku %.1f wynosi %.1f \n", $a, $p);
printf("Objętość sześcianu o boku %.1f wynosi %.1f \n", $a, $v);

/*
 * Dany jest walec o promieniu r = 7 i wysokości h = 12
 * Oblicz pole i objętość walca
 */
$r = 7;
$h = 12;
$p = 2*PI*$r*($r+$h); // pole walca
$v = PI*($r**2)*$h; // objetość walca

printf("Pole walca o promieniu %.1f i wysokości %.1f wynosi %.1f \n", $r, $h, $p);
printf("Objętość walca o promieniu %.1f i wysokości %.1f wynosi %.1f \n", $r, $h, $v);

/*
 * Dana jest kula o promieniu r = 9
 * Oblicz pole i objętość kuli
 */
$r = 9;
$p = 4*PI*($r**2); // pole kuli
$v = (4/3)*PI*($r**3); // objetość kuli

printf("Pole kuli o promieniu %.1f wynosi %.1f \n", $r, $p);
printf("Objętość kuli o promieniu %.1f wynosi %.1f \n", $r, $p);
?>