<?php
define ("PI", 3.141592);

/*
 * Dany jest kwadrat o boku a = 7
 * Oblicz obwód, pole i przekątną kwadratu
 */
$a = 7;
$p = $a**2; // pole kwadratu
$o = $a*4; // obwód kwadratu
$q = $a*sqrt(2); // przekątna kwadratu, sqrt oznacza pierwiastek

printf("Pole kwadratu o boku %.1f wynosi %.1f \n", $a, $p);
printf("Obwód kwadratu o boku %.1f wynosi %.1f \n", $a, $o);
printf("Przekątna kwadratu o boku %.1f wynosi %.1f \n", $a, $q);

/*
 * W trójkącie prostokątnym o bokach abc, bok a = 12, b = 9
 * a i b są przyprostokątnymi, c jest przeciwprostokątną
 * Oblicz obwód i pole trójkata
 */
$a = 12;
$b = 9;
$c = sqrt($a**2 + $b**2); // sqrt oznacza pierwiastek
$o = $a + $b + $c; // obwód trójkąta
$po = $o / 2; // połowa obwodu trójkata
$p = sqrt($po*($po-$a)*($po-$b)*($po-$c)); // pole trójkąta, kiedy znamy długość boków

printf("Pole trójkata a bokach a=%.1f, b=%.1f, c=%.1f wynosi %.1f \n", $a, $b, $c, $p);
printf("Obwód trójkata a bokach a=%.1f, b=%.1f, c=%.1f wynosi %.1f \n", $a, $b, $c, $o);

/* 
 * Dane jest koło o średnicy r = 5
 * Oblicz pole i obwód koła
 */
$r = 5;
$p = PI*($r**2); // pole koła, korzystamy ze zdefiniowanej w linii 2 stałej PI
$o = 2*PI*$r; // obwód koła

printf("Pole koła o promieniu %.1f wynosi %.1f \n", $r, $p);
printf("Obwód koła o promieniu %.1f wynosi %.1f \n", $r, $o);
?>