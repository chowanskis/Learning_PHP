<?php
/* definicja zmiennych */
$x = 35;
$y = 12;

printf ("x + y = %d \n", $x + $y); // suma
printf ("x - y = %d \n", $x - $y); // różnica

printf ("x * y = %d \n", $x * $y); // iloczyn
printf ("x / y = %.4f \n", $x / $y); // iloraz (pokaż 4 miejsca po przecinku)

printf ("x * x = %d \n", $x ** 2); // do kwadratu
printf ("x * x * x * x * x = %d \n", $x ** 5); // do 5 potęgi

printf ("x mod y = %d \n", $x % $y); // reszta z dzielenia (modulo)

printf ("x = %d, y = %d \n", $x, $y);
$x++; $y++; // inkrementacja (zwiększenie o jeden)

printf ("x = %d, y = %d \n", $x, $y);

$x--; $y--; // dekrementacja (zmniejszenie o jeden)
printf ("x = %d, y = %d \n", $x, $y);
?>