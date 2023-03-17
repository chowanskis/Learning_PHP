<?php

$deg = 30; // stopnie
$rad = deg2rad($deg); // zamiana stopni na radiany

// argumentem dla funkcji trygonometrycznych w języku PHP są radiany
$sin = sin($rad);
$cos = cos($rad);
$tan = tan($rad);

printf ("Sinus kąta %.2f stopni (%.2f radianów) wynosi %.2f \n", $deg, $rad, $sin);
printf ("Cosinus kąta %.2f stopni (%.2f radianów) wynosi %.2f \n", $deg, $rad, $cos);
printf ("Tangens kąta %.2f stopni (%.2f radianów) wynosi %.2f \n", $deg, $rad, $tan);
?>