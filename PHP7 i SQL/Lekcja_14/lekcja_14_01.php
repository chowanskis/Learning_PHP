<?php
/* 
 * W trójkacie prostokątnym przyprostokątne mają
 * długość a = 4 i b = 2, a jeden z kątów ostrych ma miarę α
 * Oblicz sinα * cosα  
 */

$a = 4; // pierwszy bok
$b = 2; // drugi bok

// z twierdzenia pitagorasa obliczamy długość trzeciego boku
$c = sqrt($a**2 + $b**2);

// obliczamy funkcje trygonometryczne
// pierwszy wariant, kąt ostry między a i c
$sina = $a / $c;
$cosa = $b / $c;

$result = $sina * $cosa;
printf("kąt ac: sinα * cosα = %.2f * %.2f = %.2f \n", $sina, $cosa, $result);

// drugi wariant, kąt ostry między b i c
$sina = $b / $c;
$cosa = $a / $c;

$result = $sina * $cosa;
printf("kąt bc: sinα * cosα = %.2f * %.2f = %.2f \n", $sina, $cosa, $result);
?>