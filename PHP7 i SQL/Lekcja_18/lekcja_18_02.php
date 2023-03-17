<?php
$i = 10;
$sqrt = 0;
while ($sqrt < 20) { // inicjacja pętli
    
    $sqrt = sqrt($i); // obliczenie pierwiastka
    printf ("pierwiastek z %d = %.2f\n", $i, $sqrt);
    
    $i += 50;
}
?>