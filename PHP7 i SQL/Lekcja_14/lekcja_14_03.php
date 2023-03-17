<?php

$arg1 = 2.7182818284590452354; // liczba Eulera
$log = log($arg1); // logarytm naturalny

$arg2 = 45;
$log10 = log10($arg2); // logarytm dziesiętny

$x = -85;
$abs = abs($x); // wartość bezwzględna

printf ("Logarytm naturalny z liczby %.2f wynosi %.2f \n", $arg1, $log);
printf ("Logarytm dziesiętny z liczby %.2f wynosi %.2f \n", $arg2, $log10);
printf ("Wartość bezwzględna z liczby %.2f wynosi %.2f \n", $x, $abs);
?>